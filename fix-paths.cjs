/**
 * fix-paths.cjs v2
 * Jalankan setelah: php artisan export
 * Perintah: node fix-paths.cjs
 */

const fs = require("fs");
const path = require("path");

const DIST_DIR = "./dist";

function fixContent(content) {
    // Replace semua href/src yang relative → absolute
    // Menangkap: ./xxx  ../xxx  ../../xxx  xxx (tanpa leading slash)
    return content.replace(/\b(href|src)="((?:\.\.\/|\.\/)*[^/"#][^"]*)"/g, (match, attr, p1) => {
        // Biarkan URL external dan yang sudah absolute
        if (
            p1.startsWith('http') ||
            p1.startsWith('//') ||
            p1.startsWith('#') ||
            p1.startsWith('data:') ||
            p1.startsWith('mailto:') ||
            p1.startsWith('tel:') ||
            p1.startsWith('/')
        ) {
            return match;
        }

        // Buang semua prefix ../ dan ./
        const cleanPath = p1.replace(/^(\.\.\/|\.\/)+/, '');
        return `${attr}="/${cleanPath}"`;
    });
}

function getAllHtmlFiles(dir) {
    let results = [];
    fs.readdirSync(dir).forEach((file) => {
        const filePath = path.join(dir, file);
        if (fs.statSync(filePath).isDirectory()) {
            results = results.concat(getAllHtmlFiles(filePath));
        } else if (file.endsWith(".html")) {
            results.push(filePath);
        }
    });
    return results;
}

function fixPaths() {
    console.log("🔧 Fixing asset paths in dist/...\n");

    const htmlFiles = getAllHtmlFiles(DIST_DIR);

    if (htmlFiles.length === 0) {
        console.log("❌ Tidak ada file HTML ditemukan di dist/");
        return;
    }

    htmlFiles.forEach((filePath) => {
        const original = fs.readFileSync(filePath, "utf8");
        const fixed = fixContent(original);

        if (fixed !== original) {
            fs.writeFileSync(filePath, fixed, "utf8");
            console.log(`✅ Fixed: ${filePath}`);
        } else {
            console.log(`⏭️  Skipped: ${filePath}`);
        }
    });

    console.log("\n✨ Selesai! Sekarang jalankan: firebase deploy");
}

fixPaths();
