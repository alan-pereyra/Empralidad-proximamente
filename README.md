# Empralidad - Próximamente

Tema de WordPress minimalista enfocado en páginas de mantenimiento o prelanzamiento (*Coming Soon*).

## Características principales

- **Plantilla única y universal**: Todas las peticiones y vistas del sitio web utilizan una única estructura centrada, sin plantillas secundarias ni posibilidad de desvíos.
- **Customizer ultra simplificado**: Se han removido todos los paneles y secciones por defecto de WordPress para permitir únicamente:
  1. **Color de fondo**: Seleccionable con selector de color hexadecimal.
  2. **Imagen central cuadrada**: Selector de imagen con recorte forzado en formato 1:1 de tamaño fijo.
- **Estructura inspirada en Empralidad-Theme**: Sigue el mismo esquema de carpetas (`Customizer`, `includes`, `img`) pero de forma ligera y depurada, sin sobrecarga ni dependencias innecesarias.
- **Ultra liviano y responsivo**: Sin scripts pesados ni librerías sobrantes, garantizando tiempos de carga casi instantáneos.

## Estructura del proyecto

```text
empralidad-proximamente/
├── Customizer/
│   ├── emp-customizer.php   # Registro de opciones mínimas y remoción de paneles por defecto
│   └── emp-styles.php       # Inyección de estilos dinámicos (color de fondo)
├── img/
│   └── default.png          # Imagen/logotipo cuadrado por defecto
├── includes/
│   └── enqueue-scripts.php  # Carga de estilos principales y limpieza de librerías
├── footer.php               # Pie de página mínimo con wp_footer()
├── functions.php            # Funciones principales y unificación de plantillas
├── header.php               # Encabezado HTML y wp_head()
├── index.php                # Vista única principal con imagen cuadrada centrada
├── screenshot.png           # Captura de pantalla para el panel de temas de WordPress
├── style.css                # Metadatos del tema y reglas CSS
└── README.md
```

## Desarrollado por
Alan Pereyra - [Empralidad](https://empralidad.com.ar/)
