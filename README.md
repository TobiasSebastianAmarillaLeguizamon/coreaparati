# CoreaParaTi.com

Sitio web de agencia de viajes especializada en Corea del Sur y Cultura K-Pop.

## Estructura
- `index.php`: Página principal.
- `experiencias.php`: Detalle de los tours.
- `reservar.php`: Formulario de contacto.
- `assets/`: Imágenes.
- `includes/`: Header y Footer reutilizables.

## Setup Local
1. Requerido servidor PHP (XAMPP, WAMP, o PHP built-in server).
2. Para correr localmente con PHP:
   ```bash
   php -S localhost:8000
   ```
3. Visitar `http://localhost:8000`

## Cómo subirlo a Internet (Deploy)
Para conectar tu dominio `coreaparati.com`:

1.  **Hosting**: Necesitas contratar un servicio de Hosting que soporte PHP (casi todos lo hacen: Hostinger, Bluehost, GoDaddy, etc.).
2.  **DNS**: En el panel donde compraste tu dominio `coreaparati.com`, debes cambiar los **Nameservers (DNS)** por los que te dé tu proveedor de Hosting.
3.  **Subir Archivos**:
    *   Entra al "Administrador de Archivos" de tu hosting o usa FileZilla.
    *   Busca la carpeta pública (usualmente llamada `public_html`).
    *   Sube **todos** los archivos de este proyecto (incluyendo `assets`, `includes`, `index.php`, etc.) dentro de esa carpeta.

## Tecnologías
- PHP 8
- Tailwind CSS (CDN)
- Font Awesome (CDN)
