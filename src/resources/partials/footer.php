<div>
    <h2 class="contact-us-h2 text">Contact Us</h2>
    <div class="contact_map">
        <div class="contact_container">
            <form action="/action_page.php">
                <label for="name" class="text">Name</label>
                <input class="contact-us-text" type="text" id="name" name="name" placeholder="Your name..">

                <label for="email" class="text">Email</label>
                <input class="contact-us-email" type="email" id="email" name="email" placeholder="Your last email..">

                <label for="subject" class="text">Message</label>
                <textarea class="contact-us-textarea" id="subject" name="subject" placeholder="Write your message.."
                    style="height:200px"></textarea>

                <input class="contact-us-submit" type="submit" class="text" value="Submit">
            </form>
        </div>
        <div style="margin-left: 150px; margin-top:50px">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.442594928867!2d72.62380471555721!3d23.22697598484983!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395c2bf009435f35%3A0x4bcceb7f84e4ab90!2sSports%20Authority%20of%20Gujarat!5e0!3m2!1sen!2sin!4v1675864370041!5m2!1sen!2sin"
                width="500" height="400" style="border:3px solid black; border-radius: 10px;" allowfullscreen=""
                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<footer id="footer" class="footer">
    <div class="footer-box">
        <div class="frow">
            <div class="fcol">
                <h4 class="fhead text">Highlights</h4>
                <ul>
                    <li><a class="text" href="">About Us</a></li>
                    <li><a class="text" href="">Games</a></li>
                    <li><a class="text" href="">Contact</a></li>
                    <li><a class="text" href="">Careers</a></li>
                </ul>
            </div>
            <div class="fcol">
                <h4 class="fhead text">Events</h4>
                <ul>
                    <li><a class="text" href="">Faq</a></li>
                    <li><a class="text" href="">Blog</a></li>
                    <li><a class="text" href="">Help and Support</a></li>
                    <li><a class="text" href="">Disclaimer</a></li>
                    <li><a class="text" href="">Developer APIs</a></li>
                </ul>
            </div>
            <div class="fcol">
                <h4 class="fhead text">Legal</h4>
                <ul>
                    <li><a class="text" href="">Privacy Policy</a></li>
                    <li><a class="text" href="">Terms of Services</a></li>
                    <li><a class="text" href="">Copyright Policy</a></li>
                    <li><a class="text" href="">Accesibility Statements</a></li>
                    <li><a class="text" href="">Disclaimer</a></li>
                </ul>
            </div>
            <div class="fcol">
                <h4 class="fhead text">Social Connect</h4>
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
                <h4 class="fhead text">Contact Us</h4>
                <address class="address text">
                    Sports, Youth & Cultural Activities Department<br>
                    Block No 14, 3rd Floor, Dr. Jivraj Mehta Bhavan <br> Sector - 10, Gandhinagar.
                </address>
                <div class="site text">
                    <a href="#home">www.khelmahakumbh.gov.in</a>
                </div>
            </div>
        </div>
    </div>
    <p class="text"class="text" >&lt;&lt;&lt;&copy;Sports Authority of Gujarat<br>Sports, Youth and Cultural Activities Department , Government of
        Gujarat&gt;&gt;&gt;</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>

<script>
    // function myFunction() {
    //     const myelement = document.getElementById('flexSwitchCheckChecked');

    //     if (myelement.checked == true) {
    //         myelement.addEventListener('onClick', assist());
    //     } else {
    //         alert("bye");
    //     }

    //     function assist() {
    //         alert("hello");
    //         const elements = document.querySelectorAll('.text-to-speak');
    //         elements.forEach((element) => {
    //             element.addEventListener('mouseover', speakText);
    //         });

    //         function speakText() {
    //             const text = this.textContent;
    //             const synth = window.speechSynthesis;
    //             const utterance = new SpeechSynthesisUtterance(text);
    //             utterance.lang = 'gu';
    //             synth.speak(utterance);
    //         }
    //     }
    // }

    let toggleSwitch = document.querySelector("#toggleSwitch");
    const text = document.querySelectorAll(".text");
    // let speakButton = document.querySelector("#speak");
    function readText(text) {
        let speech = new SpeechSynthesisUtterance(text.innerHTML);
        window.speechSynthesis.speak(speech);
    }

    text.forEach((element) => {
        element.addEventListener("mouseover", function () {
            if (toggleSwitch.checked) {
                readText(element);
            }
        });
    });
</script>

</body>

</html>