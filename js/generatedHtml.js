import { projects } from "./data/projects.js";

document.addEventListener("DOMContentLoaded", () => {
    const projectsWrapper = document.getElementById("js-projects-wrapper");
    if (!projectsWrapper) return;

    projects.forEach(project => {

    let techIconsHTML = "";
    project.techStack.forEach(techURL => {
        techIconsHTML += `<img class="tech-icon" src="${techURL}" alt="Tech Icon" width="${project.techWidth || 27}"/>`;
    });

    let mediaHTML = "";
    if (project.media === "video") {
        mediaHTML = `<video autoplay playsinline loop muted src="${project.mediaURL}"></video>`;
    } else if (project.media === "img") {
        mediaHTML = `<img src="${project.mediaURL}" alt="${project.name}" />`;
    }

    const generatedHTML = `
        <div id="${project.name}" class="project_card">
            <div class="${project.name}-tech-stack tech-stack">
                <span class="tech-icons">${techIconsHTML}</span>
                <span class="info-icon" style="font-weight: 600;">${project.infoIcon}</span>
            </div>
            <a class="project-link" href="${project.links[0]}">
                <div class="project_media project-${project.mediaType}">
                    ${mediaHTML}
                </div>
            </a>
            <div class="project_info">
                <div class="project_links">
                    <a class="website_link" href="${project.links[0]}">Website <i class="fa-solid fa-globe"></i></a>
                    <a class="github_link" href="${project.links[1]}" target="_blank">GitHub <i class="fab fa-github"></i></a>
                    <a class="sql_link" href="${project.links[2]}">SQL <i class="fa-solid fa-database"></i></a>
                </div>
            </div>
        </div>`;

    projectsWrapper.innerHTML += generatedHTML;

    });
});
