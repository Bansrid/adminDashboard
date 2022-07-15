<?php require_once('includes/sidebar.php') ?>
 <!-- contact us page -->
 <div class="row pt-5">
                <h1>Contact us</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, ex amet sit accusamus corrupti dignissimos magni iste laudantium quae esse perspiciatis tempora totam accusantium impedit omnis illo consequuntur? Tempora, animi. Non quod aspernatur, qui cumque quo officiis error dolore sit reprehenderit</p>
                <form action= "index.php" method= "POST">
                 <div class="row">
                <div class="mb-3 col-lg-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" name="firstname" class="form-control" placeholder="enter your first name">
                </div >
                <div class="mb-3 col-lg-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" name="lastname" class="form-control" placeholder="enter your last name">
                </div>
                </div>
                <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="emailAddress" class="form-label">Email Address</label>
                        <input type="text" name="email" class="form-control" placeholder="enter your email address">
                    </div >
                    <div class="mb-3 col-lg-6">
                        <label for="Phonenumber" class="form-label">Phone number</label>
                        <input type="text" name="phonenumber" class="form-control" placeholder="enter your phone number">
                    </div>
                    </div>
                    <div class="row">
                       <div class="mb-3 col-lg-12">
                           <label for="Message"class="form label">your Message</label>
                           <textarea cols="30" name="message" rows="5" class="form-control"></textarea>
                       </div>
                    </div>
                    <br>
                    <button type="submit" name= "submitButton" class="btn btn-primary">Send a Message</button>
            </form>
        </div>
        <!-- End contact us page -->  
    </div>