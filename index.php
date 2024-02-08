<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css"/>
    <script src="https://kit.fontawesome.com/b3c27dd02c.js" crossorigin="anonymous"></script>

    <title>Lab Exercise 3</title>
</head>
<body>
    <header class="header-fix">
        <div class="header-container">     
        <h1><i class="fa-solid fa-table"></i> Forms</h1>
        </div>  
    </header>

    <div class="container">
       <section id="LoginForm">   
                    <aside>
                        <h2><i class="fa-solid fa-question"></i>Info</h2>
                        <ul>
                            <li><b>method: POST</b></li>
                            <li><b>Mandatory fields</b></li>
                            <li><b>Standard field: text and password</b></li>
                            <li><b>Checkbox: checkbox</b></li>
                            <li><b>Standard button: submit</b></li>
                        </ul>
                    </aside>

                    <h2>Login Form</h2>
                    <p>Standard form to enter these <b>login credentials.</b></p>
            
                    <br/>
                <article>
                    <form action="LoginForm" method="POST" class="FormElement" name="form">
                        <div>
                            <label>Enter your username: </label>
                            <input type="text" name="username"/>
                        </div>
                        
                        <div>
                            <label>Enter your password: </label>
                            <input type="password" name="password"/>
                        </div>

                                <div>
                                    <label></label>
                                    <label><input type="checkbox" id="checkbox" name="Remember-me" value="ok"/>Remember me</label>
                                </div>
                            
                                <div class="align-right">
                                    <label></label>
                                     <input type="submit" value="login" name="form" id="loginbutton"/>
                                </div>
                        
                    </form>

                
                    <?php if(!empty(@$_POST) && @$_POST['form']){ ?>
                        <div class="result">
                            <b>Values returned by the form:</b><br/>
                            <ul>
                                <?php foreach($_POST as $key => $value) {
                                if($key == 'remember') {
                                    echo '<li>'.$key.'=>'.($value == 'on' ? 'Checked' : 'Not checked').'</li>';
                                } else if($key == 'remember') {
                                    echo '<li>'.$key.'=>'.($value == 'on' ? 'Checked' : 'Not checked').'</li>';
                                } else {
                                    echo '<li>'.$key.'=>'.$value.'</li>';
                                }
                                }?>
                            </ul>
                        </div>
                    <?php }?>

                </article>
       </section>
       <hr/>
       <section id="RegistrationForm">    
                    <aside>
                        <h2><i class="fa-solid fa-question"></i>Info</h2>
                        <ul>
                            <li><b>method: POST</b></li>
                            <li><b>Mandatory fields</b></li>
                            <li><b>Standard field: text, email, data, file and password</b></li>
                            <li><b>Checkbox: checkbox</b></li>
                            <li><b>Radio button: submit</b></li>
                            <li><b>Standard button: submit</b></li>
                        </ul>
                    </aside>
                    
                <article> 
                    <h2>Registration Form</h2>
                    <p>Standard form to <b>online registration</b> on a website:</p>
                    <br/>
                    <form action="RegistrationForm" method="POST" enctype="multipart/form-data" class="FormElement" name="register">

                        <div>
                            <label>Enter your <b>Gender:</b><i class="fa fa-asterisk fa-xs" aria-hidden="true"></i> </label>
                            <div>
                               <label><input type="radio"  name="gender" value="female" />Female</label>
                                <label><input type="radio" name="gender" value="male" />Male</label> 
                            </div>    
                        </div>

                        <div>
                            <label>Enter your <b>Lastname:</b><i class="fa fa-asterisk fa-xs" aria-hidden="true"></i> </label>
                            <input type="text" name="lastname" required/>
                        </div>
                            
                        <div>
                            <label>Enter your <b>Firstname:</b><i class="fa fa-asterisk fa-xs" aria-hidden="true"></i> </label>
                            <input type="text" name="firstname" required/>
                        </div>
                        
                        <div>
                            <label>Enter your <b>Date of Birth:</b><i class="fa fa-asterisk fa-xs" aria-hidden="true"></i> </label>
                            <input type="date" name="birthdate" required/>
                        </div>
                            
                        <div>
                            <label>Enter your <b>Photo:</b><i class="fa fa-asterisk fa-xs" aria-hidden="true"></i> </label>
                            <input type="file" name="imageFile" required/>
                        </div>
                            
                        <div>
                            <label>Enter your <b>Email Address:</b><i class="fa fa-asterisk fa-xs" aria-hidden="true"></i> </label>
                            <input type="email" name="email" required/>
                        </div>
                           
                        <div>
                            <label>Enter your <b>Password:</b><i class="fa fa-asterisk fa-xs" aria-hidden="true"></i> </label>
                            <input type="password" name="password" required/>
                        </div>
                            
                        <div>
                            <label><b>Confirm</b> your Password:<i class="fa fa-asterisk fa-xs" aria-hidden="true"></i> </label>
                            <input type="password" name="confirm-password" required/>
                        </div>
                            
                            <label class="mandatory"><i class="fa fa-asterisk fa-xs" aria-hidden="true"></i> mandatory fields </label>
                            <br/>
                        <div>
                            <label></label>
                            <label><input type="checkbox" id="checkbox" name="TOS" value="ok" required/>Accept TOS</label>
                        </div>
                        
                        <div class="align-right">
                            <label></label>
                            <input type="submit" value="register" name="registration" id="registerbutton"/>
                        </div>
                    
                    </form>
                    
                    <?php if (!empty($_POST) && isset($_POST['registration'])) { ?>
                    <div class="result">
                        <b>Values returned by the form:</b><br>
                        <ul>
                            <?php foreach ($_POST as $key => $value) {
                                echo '<li>' . $key . ' => ' . $value . '</li>';
                            } ?>
                        </ul>

                    <?php } ?>
        <?php
        if (!empty($_POST) && isset($_POST['registration']) && $_POST['registration'] === "register") {

            $imageTmpName = $_FILES['imageFile']['tmp_name'];
            $imageName = $_FILES['imageFile']['name'];
            $imageType = $_FILES['imageFile']['type'];
            $imageSize = $_FILES['imageFile']['size'];

            // Check if file is an actual image
            if (getimagesize($imageTmpName) !== false) {
                // Create directory if not exists
                $uploadDirectory = 'uploads/';
                if (!file_exists($uploadDirectory)) {
                    mkdir($uploadDirectory, 0777, true);
                }
                // Move uploaded file to target destination
                if (move_uploaded_file($imageTmpName, $uploadDirectory . $imageName)) {
                    // Display the uploaded image
                    echo '<div id="imageView">';
                    echo '<p>Uploaded Image:</p>';
                    echo '<img src="' . $uploadDirectory . $imageName . '" alt="' . $imageName . '" style="max-width: 250px;">';
                    echo '</div>';
                } else {
                    echo 'Failed to move the uploaded file.';
                }
            } else {
                echo 'File is not an image.';
            }
        } elseif (!empty($_FILES['imageFile'])) {
            echo 'Error uploading file. Error code: ' . $_FILES['imageFile']['error'];
        }
        ?>
                </article>
       </section>
       <hr/>
       <section>
                    <aside>
                        <h2><i class="fa-solid fa-question"></i>Info</h2>
                        <ul>
                            <li><b>method: POST</b></li>
                            <li><b>Mandatory fields</b></li>
                            <li><b>Placeholder attribute</b></li>
                            <li><b>Maxlength and minlength attributes</b></li>
                            <li><b>Textarea</b></li>
                            <li><b>Standard button: submit</b></li>
                        </ul>
                    </aside>

                    <h2>Contact Form</h2>
                    <p>Standard form for making an <b>information request</b> on a website:</p>
            
                    <br/>
                        <article>
                        <form action="ContactForm" method="POST" class="FormElement" name="form">
                            <div>
                                <label>Department you wish to contact: </label>
                                <select name="option" required>
                                    <option value="none">Select...</option>
                                    <option value="Sales Department">Sales Department</option>
                                    <option value="Communication Department">Communication Department</option>
                                    <option value="Technical Department">Technical Department</option>
                                </select>
                            </div>
                            
                            <div>
                                <label>Enter a <strong>Title</strong>: </label>
                                <input name="title" type="text" placeholder="More than 20 characters"/>
                            </div>

                            <div>
                                <label>Enter your <strong>Question</strong>: </label>
                                <textarea name="textarea" placeholder="Maximum of 1000 characters..."></textarea>
                            </div>

                            <div>
                                <label>Enter your <strong>Email address</strong>: </label>
                                <input type="email" name="email"/>
                            </div>
                                
                                    <div class="align-right">
                                        <label></label>
                                        <input type="submit" value="Contact" name="contactnow" id="contactbutton"/>
                                    </div>
                            
                        </form>

                    
                        <?php
                            if (!empty($_POST) && isset($_POST['contactnow'])) {
                                echo "<div class='result'><b>Values returned by the form:</b><br><ul>";
                                foreach ($_POST as $key => $value) {
                                    // Exclude posting the select option
                                    if ($key !== 'dept') {
                                        echo '<li>' . $key . ' =>' . $value . '</li>';
                                    }
                                }
                                echo "</ul></div>";
                            }
                        ?>

                    </article>
                    
       </section>
    </div>
</body>
</html>

