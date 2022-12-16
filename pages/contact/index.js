export default () => {
    const container = document.createElement('div');

    const template = `
    <h3>preferecias<h3>
    <p>vc e muito vagabundo</p>
    `;

    container.innerHTML = template;

    return container;
}