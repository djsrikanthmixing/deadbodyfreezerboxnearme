VERCEL DEPLOY PACKAGE
====================

This package is a Vercel-ready static conversion of the uploaded WordPress theme snapshot.

Deploy:
1. Open Vercel.
2. Create a New Project.
3. Import/upload this project ZIP.
4. Deploy with the default settings.

Important:
- PHP/WordPress files cannot execute on Vercel's static hosting runtime.
- The included index.html is the captured website homepage, with theme CSS/JS/images converted to local paths.
- WordPress-only dynamic features (admin, posts, comments, Contact Form 7 processing, etc.) are not included as live PHP features.
