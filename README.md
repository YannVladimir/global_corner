# Global Corner

A multi-category classifieds marketplace (cars, real estate, jobs, fashion, furniture, mobiles, services, sports) built on raw PHP + MySQL, with a public-facing site styled on the **Flatfy V3** HTML template and an admin area.

## Structure

- **`public/`** — the application: category/product pages, auth (`login.php`, `sign_up.php`, and separate variants for orders/services), uploads, and an `admin/` area.
- **`includes/main_functions.php`** — shared session/auth/validation helpers.
- **`Flatfy V3/`** — the vendored front-end template the public pages are built on.
- **`public/assets/`** — vendored front-end libraries (bower components) and the admin theme.

## This cleanup pass

**Security — read this first.** This repo had `includes/main_functions.php` and ~100 other PHP files with a hardcoded MySQL **root** password, and `public/mailer.php` had a real Gmail account password in plaintext, both committed since ~2016. Both have been scrubbed from the entire git history (not just removed going forward) and the credentials should be treated as compromised and rotated if still in use anywhere.

**Real bugs fixed**, found by actually running `php -l` across the codebase (now wired into CI):

- `public/add-image.php` — `$type = $_POST['type']);` had a stray `)`, a fatal syntax error on every request to this (image upload) endpoint.
- `public/admin/newadmin.php` — `echo echo "...";`, a duplicated keyword, fatal syntax error.
- `public/confirm.php` — a missing semicolon after `mail(...)`, fatal syntax error.
- `includes/main_functions.php` — `encodeUrl()` called itself with the same argument it was given, recursing forever on any non-empty input until PHP ran out of memory. Not currently called from elsewhere, but fixed (now actually `urlencode`s) and covered by a regression test.

**Known issues** (documented, not fixed in this pass — would need a larger, riskier change without a live database to verify against):

- User passwords are stored and compared in plaintext (`password = '{$password}'` in `log_user_in` and friends), not hashed.
- Queries are built by direct string interpolation rather than prepared statements; `clearInput()` escapes values but opens a *new* database connection every time it's called just to do so.

## Setup

Requires PHP and MySQL, plus [Composer](https://getcomposer.org) for the test tooling.

```bash
composer install
```

Point the `mysqli_connect(...)` calls at your own local database (or refactor them to a shared config — they're currently duplicated per-file) and import a database dump kept outside of git.

## Tests

```bash
vendor/bin/phpunit
```

Covers the pure, database-free helpers in `main_functions.php` (session flags, POST validation, `encodeUrl`). The functions that open their own `mysqli` connection inline aren't practically unit-testable without a live database and a refactor to inject the connection.

## Continuous integration

Every push runs the PHPUnit suite and lints every tracked application PHP file with `php -l` (`.github/workflows/ci.yml`), which is exactly what caught the three syntax errors above.

## License

Proprietary / client project — not open-source licensed. The Flatfy template is commercial and licensed separately from its author.
