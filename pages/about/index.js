export default () => {
    const container = document.createElement('div');

    const template = `
    <h3>preferecias<h3>
    <p> portugues etc te amo muito mano</p>
    `;

    container.innerHTML = template;

    return container;
}