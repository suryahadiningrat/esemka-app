        $(document).ready(function(){
            $(".preloader").fadeOut();
            document.querySelector("#body").style.overflow="scroll";
            
            
            // var x = "Version info: " + navigator.appVersion;
            // document.querySelector("#demo").innerHTML = x;
            const cekBox = document.querySelector("#menu_toggle");

            const menuItem = document.querySelectorAll(".menu_item");
            menuItem.forEach(items => {
                items.addEventListener("click", event => {
                    cekBox.checked = false;
                    // const categoryName = event.target.id;
                })
            })

            const blackOverlay = document.querySelector("#bodyblack");
            blackOverlay.addEventListener("click", event => {
                cekBox.checked = false;
            })
        })
        
        const download = () => {
            if (navigator.appVersion.indexOf("Android") != -1) {
               location.replace("#download-android");
            }
            
            if (navigator.appVersion.indexOf("iOS") != -1) {
                location.replace("#download-iPhone");
            }
            
            if (navigator.appVersion.indexOf("Win") != -1) {
                document.querySelector(".download-fixed").style.display = 'none';
                document.querySelector(".copyright").style.marginBottom = '0';
            }                        
        }
        
        const passwordToogle = () => {
            const password = document.querySelector("#password");
            const icon = document.querySelector("#icon");
            const passwordHidden = document.querySelector("#passwordHidden");
        
            if (password.type === "password") {
                password.type = "text";
                icon.className = "fas fa-eye";
            } else {
                password.type = "password";
                icon.className = "fas fa-eye-slash";
            }
        }
        
        const passwordKonfToogle = () => {     
            const passwordKonf = document.querySelector("#passwordKonf");
            const iconKonf = document.querySelector("#iconKonf");
            const passwordHiddenKonf = document.querySelector("#passwordHiddenKonf");
            
            if (passwordKonf.type === "password") {
                passwordKonf.type = "text";
                iconKonf.className = "fas fa-eye";
            } else {
                passwordKonf.type = "password";
                iconKonf.className = "fas fa-eye-slash";
            }
        }
        
        window.onload = () => {
            document.querySelector("#password").onchange = validatePassword;
            document.querySelector("#passwordKonf").onchange = validatePassword;
            document.querySelector("#email").onchange = validatePassword;
        }
      
        const validatePassword = () => {
            const password = document.querySelector("#password").value;
            const passwordKonf = document.querySelector("#passwordKonf").value;
            
            if (password.length < 8)
                document.querySelector("#password").setCustomValidity("Minimal Karakter Password 8");
            else
                document.querySelector("#password").setCustomValidity('');
            
            if(password!=passwordKonf)
                document.querySelector("#passwordKonf").setCustomValidity("Password Tidak Sama, Coba Lagi");
            else
                document.querySelector("#passwordKonf").setCustomValidity('');
        }

        const love = (event) => { 
            if(event.target.style.color == "red")
            {
                event.target.style.color = "#d9dddc";   
                event.target.style.transition = ".3s ease-out";
                event.target.classList.remove("zoom-anim");
                void event.target.offsetWidth;
                event.target.classList.add("zoom-anim");
                event.target.style["-webkit-text-stroke-width"] = "2px";
                event.target.style["-webkit-text-fill-color"] = "white";
                //event.target.style.transform =  "rotate(360deg)";
                //event.target.style.animation = "zoominout .3s ease-in";
            }
            else
            {
                event.target.style.color = "red";
                event.target.style.transition = ".3s ease-in";
                event.target.classList.remove("zoom-anim");
                void event.target.offsetWidth;
                event.target.classList.add("zoom-anim");
                event.target.style["-webkit-text-stroke-width"] = "0px";
                event.target.style["-webkit-text-fill-color"] = "#ED4956";
                //event.target.style.transform =  "rotate(0deg)";
                //event.target.style.animation = "zoominout .3s ease-in";
            }
        }