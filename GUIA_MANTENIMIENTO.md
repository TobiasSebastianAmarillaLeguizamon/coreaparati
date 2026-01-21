# Guía de Mantenimiento - CoreaParaTi

Esta guía está diseñada para ayudarte a editar y mantener el sitio web. El sitio está construido con **HTML5** y **Tailwind CSS**.

## 1. ¿Qué debo aprender?

Para editar este sitio para tus clientes, necesitas dominar dos cosas principales:

### A. HTML (Para el Contenido)
Es la estructura. Necesitas saber identificar estas etiquetas para cambiar textos e imágenes:

*   **Texto y Títulos**: Busca el texto blanco dentro de las etiquetas y cámbialo.
    *   `<h1>`, `<h2>`, `<h3>`: Títulos grandes.
    *   `<p>`: Párrafos de texto.
    *   `<span>`: Textos pequeños o destacados.
*   **Imágenes**: Busca la etiqueta `<img>`.
    *   `src="..."`: Aquí va la ruta de la imagen (ej: `assets/img/foto.jpg` o un link `https://...`).
    *   `alt="..."`: Descripción de la imagen (importante para Google).
*   **Enlaces (Links)**: Busca la etiqueta `<a>`.
    *   `href="..."`: A dónde te lleva el click (ej: `reservar.html`, `#nosotros`, o `https://instagram.com`).

### B. Tailwind CSS (Para el Diseño)
En lugar de un archivo `.css` aparte, usamos "clases" directamente en el HTML.
*   **Colores**:
    *   Texto: `text-red-500`, `text-white`, `text-slate-500`.
    *   Fondo: `bg-black`, `bg-white`, `bg-slate-50`.
*   **Espaciado (Padding y Margin)**:
    *   `p-4`: Relleno interno (padding).
    *   `m-4`: Margen externo (margin).
    *   `mb-4`: Margen inferior (margin-bottom).
*   **Tamaño de Texto**:
    *   `text-sm` (pequeño), `text-lg` (grande), `text-4xl` (muy grande).

## 2. Configuración Especial de tu Sitio
Tu sitio tiene colores personalizados definidos en el `<head>` de cada archivo. No necesitas memorizar códigos hex, solo usa estos nombres:

| Nombre de Clase | Color | Uso Principal |
| :--- | :--- | :--- |
| `bg-primary` / `text-primary` | **Azul Noche** (#0F172A) | Fondos oscuros, textos principales. |
| `bg-accent` / `text-accent` | **Rosa K-Pop** (#F43F5E) | Botones, destacados, iconos. |
| `bg-secondary` / `text-secondary` | **Celeste** (#38BDF8) | Detalles sutiles, subtítulos. |

### Ejemplo Práctico: Cambiar un Botón

Si ves este código:
```html
<a href="reservar.html" class="bg-accent text-white px-6 py-2 rounded-full">
    Reservar Ahora
</a>
```

*   **Cambiar color**: Cambia `bg-accent` por `bg-primary` (se volverá azul oscuro) o `bg-black`.
*   **Cambiar texto**: Borra "Reservar Ahora" y escribe "Comprar Ticket".
*   **Redondear menos**: Cambia `rounded-full` por `rounded-lg` (esquinas levemente curvas).

## 3. Iconos
Usamos **FontAwesome**. Para cambiar iconos, busca etiquetas como `<i class="fa-solid fa-heart"></i>`.
*   Busca nuevos iconos gratis en: [fontawesome.com](https://fontawesome.com/search?m=free)
*   Solo copia el nombre de la clase (ej: `fa-brands fa-instagram`).

## 4. Recursos Útiles
*   **Buscador de Clases Tailwind**: [Tailwind Cheat Sheet](https://nerdcave.com/tailwind-cheat-sheet) (¡Ten esto siempre abierto!).
*   **Documentación Oficial**: [tailwindcss.com](https://tailwindcss.com/).
