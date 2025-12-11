<?php
// Handle contact form submission
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Save to a file
    $contactData = "Name: $name\nEmail: $email\nMessage: $message\n----------------------\n";
    file_put_contents('contact_messages.txt', $contactData, FILE_APPEND);
    
    $success = "Your message has been sent!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Christjee Oroyan - Portfolio</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
/* General */
body {
  margin: 0;
  font-family: "Poppins", sans-serif;
  background: #000;
  color: #fff;
  scroll-behavior: smooth;
}

/* Header */
header {
  position: fixed;
  width: 97%;
  top: 0;
  background: #000;
  border-bottom: 2px solid red;
  padding: 15px 30px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 1000;
  transition: 0.3s;
}
header.scrolled {
  background: #111;
  box-shadow: 0 2px 10px rgba(255,0,0,0.2);
}
header h1 {
  color: red;
  text-shadow: 0 0 10px red;
  font-size: 22px;
}
nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  display: flex;
  gap: 20px;
}
nav a {
  color: #fff;
  font-weight: 600;
  font-size: 15px;
  transition: 0.3s;
}
nav a:hover {
  color: red;
  text-shadow: 0 0 10px red;
}

/* Sections */
section {
  min-height: 100vh;
  padding: 130px 20px 60px;
  text-align: center;
}

/* Home */
.avatar {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  border: 4px solid red;
  box-shadow: 0 0 20px red;
  object-fit: cover;
}
h2 {
  color: red;
  font-size: 32px;
  margin-top: 15px;
}
p {
  color: #ccc;
  font-size: 17px;
  max-width: 650px;
  margin: 10px auto;
}

/* Skills */
.skills .skill-item {
  font-size: 20px;
  color: red;
  margin: 15px 0;
  text-shadow: 0 0 10px red;
}

/* Photos */
.photos-gallery {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
.photos-gallery img {
  width: 220px;
  height: 180px;
  object-fit: cover;
  border-radius: 10px;
  border: 2px solid red;
  margin: 10px;
  transition: 0.4s;
}
.photos-gallery img:hover {
  transform: scale(1.08);
  box-shadow: 0 0 20px red;
}

/* Contact */
form {
  max-width: 400px;
  margin: auto;
  display: flex;
  flex-direction: column;
}
input, textarea {
  padding: 12px;
  background: #111;
  border: 2px solid red;
  border-radius: 5px;
  margin-bottom: 10px;
  color: #fff;
  font-size: 15px;
}
button {
  background: red;
  padding: 12px;
  border: none;
  color: white;
  font-size: 17px;
  cursor: pointer;
  transition: 0.3s;
}
button:hover {
  background: #cc0000;
}

/* Footer */
footer {
  text-align: center;
  padding: 20px;
  border-top: 2px solid red;
  color: #ccc;
  margin-top: 60px;
}

/* Responsive */
@media screen and (max-width:768px){
  header { flex-direction: column; align-items: flex-start; padding: 10px 20px; }
  header h1 { font-size: 20px; margin-bottom: 5px; }
  nav ul { gap: 10px; flex-wrap: wrap; }
  h2 { font-size: 26px; }
  p { font-size: 15px; }
  .avatar { width: 120px; height: 120px; }
  .photos-gallery img { width: 160px; height: 120px; }
}
</style>
</head>
<body>

<header>
  <h1>Christjee Oroyan</h1>
  <nav>
    <ul>
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#photos">My Photos</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </nav>
</header>

<section id="home">
  <img class="avatar" src="https://scontent.fceb1-4.fna.fbcdn.net/v/t39.30808-6/481084903_2042020832974630_1015066418329337758_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHITwwV0Bat310TOPaYy0XKW9Cpq5CrPzxb0KmrkKs_PB3zEyl3NVSeP1iUEbJCVjSGTT6j3ukVZjIKvL_Qq7C3&_nc_ohc=vLLFbrj02oQQ7kNvwFWVLOt&_nc_oc=AdlmCFs4kFAZ6M6nuVaCXTt4NvIDhRBEta8kJrM9t5rv_aWV9kT1CRqqq-AIH3tE7xo&_nc_zt=23&_nc_ht=scontent.fceb1-4.fna&_nc_gid=R3jdBJ3pIaLZHgqmvnaSHQ&oh=00_AfmLIGTw4ldXwLTeHVTwivvFZ9zwcR4wFKFD4k5zPytFmg&oe=693FD08A" alt="Christjee Oroyan">
  <h2>Hi, I'm Christjee Oroyan</h2>
  <p>BSIS Student passionate about life, designer and photographer.</p>
</section>

<section id="about">
  <h2>About Me</h2>
  <p>Hello! My name is Christjee Oroyan. I am a BSIS student who focuses on personal growth and living life to the fullest. I have a strong interest in technology and practical skills such as designing and photography.</p>
</section>

<section id="skills" class="skills">
  <h2>My Skills</h2>
  <div class="skill-item"><i class="fas fa-pen-nib"></i> Designer</div>
  <div class="skill-item"><i class="fas fa-camera"></i> Photographer</div>
</section>

<section id="photos">
  <h2>My Photos</h2>
  <div class="photos-gallery">
    <img src="https://d1csarkz8obe9u.cloudfront.net/posterpreviews/photography-logo%2C-camera-logo%2C-modern-camera-design-template-61a629a6b006a5d93947e93c81f16ce4_screen.jpg" alt="Photo 1">
    <img src="https://scontent.fceb1-4.fna.fbcdn.net/v/t39.30808-6/481084903_2042020832974630_1015066418329337758_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=833d8c&_nc_eui2=AeHITwwV0Bat310TOPaYy0XKW9Cpq5CrPzxb0KmrkKs_PB3zEyl3NVSeP1iUEbJCVjSGTT6j3ukVZjIKvL_Qq7C3&_nc_ohc=vLLFbrj02oQQ7kNvwFWVLOt&_nc_oc=AdlmCFs4kFAZ6M6nuVaCXTt4NvIDhRBEta8kJrM9t5rv_aWV9kT1CRqqq-AIH3tE7xo&_nc_zt=23&_nc_ht=scontent.fceb1-4.fna&_nc_gid=R3jdBJ3pIaLZHgqmvnaSHQ&oh=00_AfmLIGTw4ldXwLTeHVTwivvFZ9zwcR4wFKFD4k5zPytFmg&oe=693FD08A" alt="Photo 2">
    <img src="https://www.creativefabrica.com/wp-content/uploads/2021/11/09/Designer-Fonts-19889186-1.jpg" alt="Photo 3">
  </div>
</section>

<section id="contact">
  <h2>Contact Me</h2>
  <?php if($success): ?>
    <p style="color:red; margin-bottom:20px;"><?php echo $success; ?></p>
  <?php endif; ?>
  <form method="POST" action="#contact">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Your Email" required>
    <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
    <button type="submit">Send</button>
  </form>
</section>

<footer>
  &copy; <?php echo date('Y'); ?> Christjee Oroyan. All Rights Reserved.
</footer>

<script>
// Header scroll effect
window.addEventListener('scroll', function() {
  document.querySelector('header').classList.toggle('scrolled', window.scrollY > 50);
});
</script>

</body>
</html>
