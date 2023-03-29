<html>
    <?php 
        require 'head.php';
    ?>
   <title><?php //echo $lastname . "," . $firstname . " Grades";?></title>
</head>

<body style="background-color: #00000">
	<!-- Navigation Bar -->
  <?php 
        require 'nav.php';
    ?>

  <!--PHP CODE HERE JUST ADD LABEL-->
	<main class="border-8 rounded flex flex-row content h-screen m-5" style="background-color: #57C5B6">
    <div class="border-4 p-10 h-4/5 w-1/4 space-y-12 text-2xl cursor-pointer" style="background-color: #159895">
      <h1 class="hover:text-red-500">View Grades</h1>
      <h1 class="hover:text-red-500">Create Grades for Subject</h1>
      <h1 class="hover:text-red-500">Create Subject Data</h1>
    </div>

		<div class="border-2 h-4/5 w-4/5 content">
      <div class="flex flex-col border-2 w-auto ">
          <div class="flex flex-row justify-around h-32 font-bold ">
            <h1 class="border flex flex-1 justify-center items-center">CLASS</h1>
            <h1 class="border flex flex-1 justify-center items-center">PRELIM</h1>
            <h1 class="border flex flex-1 justify-center items-center">MIDTERM</h1>
            <h1 class="border flex flex-1 justify-center items-center">FINALS</h1>
          </div>
        <div class="flex flex-col border w-auto ">
          <div class="flex flex-row justify-around ">
            <h1 class="border flex flex flex-1">sub1</h1>
            <h1 class="border flex flex-1">subprelimGRADES</h1>
            <h1 class="border flex flex-1">submidtermGRADES</h1>
            <h1 class="border flex flex-1">subfinalsGRADES</h1>
          </div>
          <div class="flex flex-col border w-auto ">
          <div class="flex flex-row justify-around ">
            <h1 class="border flex flex flex-1">sub2</h1>
            <h1 class="border flex flex-1">subprelimGRADES</h1>
            <h1 class="border flex flex-1">submidtermGRADES</h1>
            <h1 class="border flex flex-1">subfinalsGRADES</h1>
          </div>
          <div class="flex flex-col border w-auto ">
          <div class="flex flex-row justify-around ">
            <h1 class="border flex flex flex-1">sub3</h1>
            <h1 class="border flex flex-1">subprelimGRADES</h1>
            <h1 class="border flex flex-1">submidtermGRADES</h1>
            <h1 class="border flex flex-1">subfinalsGRADES</h1>
          </div>
          <div class="flex flex-col border w-auto ">
          <div class="flex flex-row justify-around ">
            <h1 class="border flex flex flex-1">sub4</h1>
            <h1 class="border flex flex-1">subprelimGRADES</h1>
            <h1 class="border flex flex-1">submidtermGRADES</h1>
            <h1 class="border flex flex-1">subfinalsGRADES</h1>
          </div>
        </div>
     </div>
	</main>
  <!--PHP CODE HERE JUST ADD LABEL-->


	<footer style="background-color: #002B5B">
		<p class="text-white p-10">&copy; 2023 Created by Section 1 BSIT All rights reserved.</p>
	</footer>


</body>
</html>