export default () => {
    const container = document.createElement('div');

    const template = `
    <h2 id="la">Preferências<h2>
    <p id="spr">Ajustar preferências de idioma, vídeos</p>
    <h4 id="le">Idioma</h4>
    <select id="por">
    <label="language">
        <option label="Português Brasil">Português Brasil</option>
        <option label="Inglês">Inglês</option>
        <option label="Japonês">Japonês</option>
        <option label="Coreano">Coreano</option>
        <option label="Grego">Grego</option>
    </select>
    </label>
    <hr>
    `;

    container.innerHTML = template;

    return container;
}