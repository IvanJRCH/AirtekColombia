customElements.define('shadow-dom', class extends HTMLElement {
  connectedCallback() {
    const shadow = this.attachShadow({ mode: 'open', delegatesFocus: true });

    // Obtener el contenido del atributo data-html
    const htmlContent = this.getAttribute('data-html');
    const cssContent = this.getAttribute('data-css');
    const jsContent = this.getAttribute('data-js');

    // Cargar CSS
    if (cssContent) {
      const cssList = cssContent.split(",");
      cssList.forEach((cssUrl) => {
        const link = document.createElement('link');
        link.setAttribute('rel', 'stylesheet');
        link.setAttribute('href', cssUrl);
        shadow.appendChild(link);
      });
    }

    // Insertar HTML
    if (htmlContent) {
      shadow.innerHTML += htmlContent;
    }

    // Cargar JS
    if (jsContent) {
      const jsList = jsContent.split(",");
      jsList.forEach((jsUrl) => {
        const script = document.createElement('script');
        script.src = jsUrl;

        // Usar onload para ejecutar el script después de que se haya cargado
        script.onload = () => console.log(`Script cargado: ${jsUrl}`);
        script.onerror = () => console.error(`Error al cargar el script: ${jsUrl}`);

        // Agregar el script al documento principal para que se ejecute
        document.head.appendChild(script);
      });
    }
  }
});

