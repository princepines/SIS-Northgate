<!DOCTYPE html>
<html>
  <head>
    <title>My PHP-Tailwind Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.7/tailwind.min.css">
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: '#da373d',
            }
          }
        }
      }
    </script>
  </head>
  
<body style="background-color: #57C5B6">

      <!--PHP CODE HERE-->
    <nav class="flex container mx-auto p-2 pl-0 h-36">
      <div class="flex ml-2 bg-blue-500 container mx-20 w-36 items-center bg-contain">
        <img src="logo-social.png" alt="">
    </div>
      <div class="hidden lg:flex space-x-24 cursor-pointer items-center font-bold text-2xl text-black-500">
        <div class="text-blue hover:text-red-500">View Payment</div>
        <div class="text-blue hover:text-red-500">View Profile</div>
        <div class="text-blue hover:text-red-500">View Grades</div>
      </div>
      <div></div>
    </nav>
      <!--PHP CODE HERE-->


    <div class="container flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0
    md:space-y-0  md:flex-row">
      <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
        <h1 class="max-w-md text-4xl font-bold text-center md:text-5xl md:text-left">
          This is a Student Information System, We are Informatics striving for better!
        </h1>
        <p class="max-w-sm text-center text-black-700 md:text-left">
          Made by section 1 BS Information Technology section that manages the backend and front end while keeping the same goal 
          for everyone
        </p>
        <div class="flex flex-col justify-center md:justify-start border-solid p-5 pl-0 ">
          <p>Aldwin Gabriel Pirante</p>
          <p>Lyco Tatierra</p>
          <p>Trishia Gaville</p>
          <p>Wryan Andres</p>
        </div> 
      </div>
      <div class="md:1/2">
      <img src="image-1.png" alt="">
      </div>
    </div>

    <nav class="flex px-4 flex-row
    mx-auto mt-10 space-y-12 md:space-y-0 md:flex-row pb-12 bg-red-500"style="background-color: #159895">
    
    <div class="flex flex-col space-y-5 md:w-1/2">
      <h2 class="max-w-md text-4xl font-bold text-center pt-12 md:text-left">
        Contact Us
      </h2>
      <h3>Facebook logo: informatics@fb.com</h3>
      <h4>Email: info101@informatics.edu.ph</h4>
    </div>

    
      
    
  </nav>
    
</body>
</html>