document.addEventListener("DOMContentLoaded", main);

function main() {
    // Carousel Init
    $('#carouselExampleIndicators').carousel();

    // Navbar Window Scroll Adjustment
    window.addEventListener("scroll", () => {
        const navbar = document.querySelector('.navbar');
        const scrollMin = 50;

        if (document.body.scrollTop > scrollMin || document.documentElement.scrollTop > scrollMin)
            navbar.style.boxShadow = "0 2px 10px rgba(0, 0, 0, 0.1)";
        else
            navbar.style.boxShadow = "none";
    });

    const profileBtn = document.querySelector('.profile-dropdown .profile-btn');
    const profileMenu = document.querySelector('.profile-dropdown .profile-menu');

    profileBtn.addEventListener("click", () => {
        profileMenu.classList.toggle('show');
    });

    const listJob = document.querySelectorAll('.list-job .card');

    listJob.forEach(jobElm => {
        const detailBtn = jobElm.querySelector('.card-body .btn');
        const jobData = {
            company_img: jobElm.querySelector('.job-data .company-img').innerText,
            job_name: jobElm.querySelector('.job-data .job-name').innerText,
            job_location: jobElm.querySelector('.job-data .job-location').innerText,
            job_type: jobElm.querySelector('.job-data .job-type').innerText,
            job_salary: jobElm.querySelector('.job-data .job-salary').innerText,
            job_description: jobElm.querySelector('.job-data .job-description').innerText
        };

        // When Detail Button Clicked and Detail Job Modal Opened
        detailBtn.onclick = async () => {
            // Detail Job Modal Element
            const detailJobModal = document.querySelector('#detail-job-modal');
            const companyImg = detailJobModal.querySelector('.company-img img');
            const jobName = detailJobModal.querySelector('.job-name');
            const jobLocation = detailJobModal.querySelector('.job-location > span');
            const jobType = detailJobModal.querySelectorAll('.job-type-salary .job-side-detail')[0];
            const jobSalary = detailJobModal.querySelectorAll('.job-type-salary .job-side-detail')[1];
            const jobDescription = detailJobModal.querySelector('.job-description');

            // Set Value Into Modal
            const imgComp = await fetch(jobData.company_img).then(response => response.blob());
            companyImg.src = "";
            companyImg.src = URL.createObjectURL(imgComp);
            jobName.innerText = jobData.job_name;
            jobLocation.innerText = jobData.job_location;
            jobType.innerText = jobData.job_type;
            jobSalary.innerText = jobData.job_salary;
            jobDescription.innerText = jobData.job_description;
        }
    });
}