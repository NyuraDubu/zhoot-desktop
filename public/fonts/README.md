# Europa Grotesk SH Fonts

Place your licensed `Europa Grotesk SH` font files in this folder (or the `europa/` subfolder if you keep that structure).

Expected files (rename to match if different):
- `europa/EuropaGroteskSH-Light.woff2` (300)
- `europa/EuropaGroteskSH-Regular.woff2` (400)
- `europa/EuropaGroteskSH-Medium.woff2` (500)
- `europa/EuropaGroteskSH-Bold.woff2` (700)

You can remove weights you don't have—also remove the corresponding `@font-face` blocks in `resources/css/app.css` to avoid 404s.

After adding files, re-run the dev server or rebuild assets:
```
npm run dev
# or
npm run build
```
