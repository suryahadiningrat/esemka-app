document.addEventListener("DOMContentLoaded", () => {
    const wireframeVideo = document.querySelector('.feature-wireframe .video');
    const listWireframeOpt = document.querySelectorAll('.feature-wireframe .option-list .option');
    const wireframeOptionDef = document.querySelector('.feature-wireframe .option-list .option:nth-child(1)');
    const defaultOption = document.querySelector('.feature-wireframe .option-list .option:nth-child(1) .link').innerText;

    // Set Default Active Wireframe Option
    wireframeOptionDef.classList.add("active");
    wireframeVideo.src = defaultOption;

    // Button Listener For Wireframe Option
    listWireframeOpt.forEach(wireframeOption => {
        wireframeOption.onclick = () => {
            listWireframeOpt.forEach(opt => {
                if (opt.classList.contains("active"))
                    opt.classList.remove("active");
            });
            wireframeOption.classList.add("active");
            wireframeVideo.src = wireframeOption.querySelector('.link').innerText;
            wireframeVideo.autoplay = true;
        }
    });
});