# Deployment Notes

## Prerequisites

- `php version 8.1`
- php extention: ldap, swap, dll.
- install Graphviz di Windows

## Deployment Steps

1. Copy the `looker.html.twig` file to the desired location:
   ```bash
   cp env-production/itop-portal-base/portal/templates/home/looker.html.twig
   ```
2. **Update Layout Portal File**
   Update file di path: env-production/itop-portal-base/portal/templates/home/layout.html.twig

   tambahkan code ini di baris: 28 setelah `{% endfor %}`

   ```twig
    {% include 'itop-portal-base/portal/templates/home/looker.html.twig' %}
   ```

3. **Clear Cache**

   Setiap ada perubahan file `twig` bersihkan dengan menjalan perintah ini di console di root project.

   ```bash
    rm -rf cache-production
   ```

## Post-Deployment Checklist

- Login ke aplikasi.
- Pastikan muncul link looker di Portal User.
- Pastikan link looker sudah betul mengarah ke masing-masing organisasi.
