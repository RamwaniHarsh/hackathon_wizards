<div id="contact">
    <h2 class="contact-us-h2">Contact Us</h2>
    <div class="contact_map">
        <div class="contact_container">
            <form action="mail.php">
                <label for="fname">Name</label>
                <input class="contact-us-text" type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="email">Email</label>
                <input class="contact-us-email" type="email" id="email" name="email" placeholder="Your last email..">

                <label for="subject">Message</label>
                <textarea class="contact-us-textarea" id="subject" name="subject" placeholder="Write your message.."
                    style="height:200px"></textarea>

                <input class="contact-us-submit" type="submit" value="Submit">
            </form>
        </div>
        <div style="margin-left: 150px; margin-top:50px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.442594928867!2d72.62380471555721!3d23.22697598484983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2bf009435f35%3A0x4bcceb7f84e4ab90!2sSports%20Authority%20of%20Gujarat!5e0!3m2!1sen!2sin!4v1675864370041!5m2!1sen!2sin" width="500" height="400" style="border:3px solid black; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
    </div>
</div>

<footer id="footer" class="footer">
    <div class="footer-box">
        <div class="frow">
            <div class="fcol">
                <h4 class="fhead">Highlights</h4>
                <ul>
                    <li><a href="">About Us</a></li>
                    <li><a href="">Games</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Careers</a></li>
                </ul>
            </div>
            <div class="fcol">
                <h4 class="fhead">Events</h4>
                <ul>
                    <li><a href="">Faq</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Help and Support</a></li>
                    <li><a href="">Disclaimer</a></li>
                    <li><a href="">Developer APIs</a></li>
                </ul>
            </div>
            <div class="fcol">
                <h4 class="fhead">Legal</h4>
                <ul>
                    <li><a href="">Privacy Policy</a></li>
                    <li><a href="">Terms of Services</a></li>
                    <li><a href="">Copyright Policy</a></li>
                    <li><a href="">Accesibility Statements</a></li>
                    <li><a href="">Disclaimer</a></li>
                </ul>
            </div>
            <div class="fcol">
                <h4 class="fhead">Social Connect</h4>
                <ul class="socials">
                    <li class="list-item">
                        <a href="">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li class="list-item">
                        <a href="">
                            <i class="fa fa-pinterest"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="fcol contact">
                <h4 class="fhead">Contact Us</h4>
                <address class="address">
                    Sports, Youth & Cultural Activities Department<br>
                    Block No 14, 3rd Floor, Dr. Jivraj Mehta Bhavan <br> Sector - 10, Gandhinagar.
                </address>
                <div class="site">
                    <a href="#home">www.khelmahakumbh.gov.in</a>
                </div>
            </div>
        </div>
    </div>
    <p>&lt;&lt;&lt;&copy;Sports Authority of Gujarat<br>Sports, Youth and Cultural Activities Department , Government of
        Gujarat&gt;&gt;&gt;</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

<!-- <script src="../js/globe.js" defer></script> -->
<script src="https://cdn.gtranslate.net/widgets/v1.0.1/dropdown.js" defer></script>

<script>
    function changeBackground(color) {
        document.body.style.backgroundColor = color;
    }

    function myFunction() {
        const myelement = document.getElementById('flexSwitchCheckChecked');

        if (myelement.checked == true) {
            myelement.addEventListener('onClick', assist());
        } else {
            alert("bye");
        }

        function assist() {
            alert("hello");
            const elements = document.querySelectorAll('.text-to-speak');
            elements.forEach((element) => {
                element.addEventListener('mouseover', speakText);
            });

            function speakText() {
                const text = this.textContent;
                const synth = window.speechSynthesis;
                const utterance = new SpeechSynthesisUtterance(text);
                utterance.lang = 'gu';
                synth.speak(utterance);
            }
        }
    }
    window.gtranslateSettings = {
        "default_language": "en",
        "native_language_names": true,
        "detect_browser_language": true,
        "languages": ["en", "gu", "hi"],
        "globe_color": "#66aaff",
        "wrapper_selector": ".gtranslate_wrapper",
        "flag_size": 48,
        "horizontal_position": "right",
        "vertical_position": "bottom"
    }
</script>
<script>
      let toggleSwitch = document.querySelector("#toggleSwitch");
    const text = document.querySelectorAll(".text");
    // let speakButton = document.querySelector("#speak");
    function readText(text) {
  let speech = new SpeechSynthesisUtterance(text.innerHTML);
  window.speechSynthesis.speak(speech);
}

text.forEach((element) => {
  element.addEventListener("mouseover", function() {
    if (toggleSwitch.checked) {
      readText(element);
    }
  });
});
    </script>
</body>

</html>