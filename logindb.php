<?php
 include 'connect.php';

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="shortcut icon" type="x-icon" href="img/JU logo.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Login</title>
  </head>

  <!-- Starting of the main page -->
  <!-- Linear gradient bg -->
  <body
    class="h-screen bg-gradient-to-r from-orange-500 via-gray-300 to-blue-500"
  >
    <!-- JU logo and login box on a flex -->
    <div class="mt-[114px] justify-center flex space-x-[168px]">
      <!-- JU logo -->
      <div
        class="left bg-white pt-[39px] pb-[54px] pr-[73px] pl-[78px] items-center rounded-3xl"
      >
        <img class="w-60" src="img/JU logo.png" alt="" />
      </div>

      <!-- login box -->
      <div class="right flex flex-col p-7 bg-blue-900 rounded-3xl">
        <p class="text-5xl font-bold text-white py-5 mx-auto text-center">
          Login
        </p>
        <input
          class="text-3xl px-4 h-12 my-3 border border-gray-200 rounded-3xl text-center"
          type="text"
          placeholder="USERNAME"
        />
        <input
          class="text-3xl px-4 h-12 my-3 border border-gray-200 rounded-3xl text-center"
          type="text"
          placeholder="STUDENT ID"
        />
        <a href="dashboard.html" class="mx-auto">
          <button
            class="text-3xl font-bold bg-yellow-500 rounded-3xl py-3 my-5 hover:bg-yellow-400 w-60 mx-auto shadow-md"
          >
            Login
          </button>
        </a>
      </div>
    </div>

    <!-- white divider under the JU logo and login box -->
    <div>
      <hr class="bg-white ml-[187px] mr-[194px] mt-[72px]" />
    </div>

    <!-- useful links, admission link and others -->
    <div class="flex mt-[50px] justify-center space-x-40">
      <!-- useful links -->
      <div
        class="flex flex-col text-white font-semibold text-base cursor-pointer"
      >
        <p>USEFUL LINKS</p>
        <p>
          <a href="https://juniv.edu/certificate" class="hover:underline"
            >• NOC & GO</a
          >
        </p>
        <p>
          <a
            href="https://juniv.edu/download?center_id=4175"
            class="hover:underline"
            >• Download Form</a
          >
        </p>
        <p>
          <a
            href="https://juniv.edu/discussion?event_id=7"
            class="hover:underline"
            >• Result</a
          >
        </p>
        <p>
          <a
            href="https://juniv.edu/custom/slug/research-work"
            class="hover:underline"
            >• Research Work</a
          >
        </p>
      </div>

      <!-- admission links -->
      <div
        class="flex flex-col text-white font-semibold text-base cursor-pointer"
      >
        <p>ADMISSION LINKS</p>
        <p>
          <a href="https://juniv-admission.org/" class="hover:underline"
            >• Bachelor (Honours) Admission</a
          >
        </p>
        <p>
          <a href="https://juniv.edu/admission/graduate" class="hover:underline"
            >• Masteers Admission</a
          >
        </p>
        <p>
          <a
            href="https://juniv.edu/admission/m.phil-phd"
            class="hover:underline"
            >• M.Phil & PhD Admission</a
          >
        </p>
        <p>
          <a
            href="https://juniv.edu/admission/weekend-courses"
            class="hover:underline"
            >• Weekkend & Evening Courses</a
          >
        </p>
      </div>

      <!-- others -->
      <div
        class="flex flex-col text-white font-semibold text-base cursor-pointer"
      >
        <p>OTHERS</p>
        <p>
          <a href="https://juniv.edu/teachers" class="hover:underline"
            >• Faculty Members</a
          >
        </p>
        <p>
          <a href="https://juniv.edu/office/ictcell" class="hover:underline"
            >• ICT Cell</a
          >
        </p>
        <p>
          <a
            href="https://juniv.edu/student-email/apply"
            class="hover:underline"
            >• Apply For Student Email ID</a
          >
        </p>
        <p>
          <a
            href="https://comptroller.juniv.edu/regmember"
            class="hover:underline"
            >• Accounts Automation Form</a
          >
        </p>
      </div>
    </div>

    <!-- footer part -->
    <div>
      <p
        class="text-white text-lg font-semibold mt-[50px] justify-center flex space-x-[168px]"
      >
        Jahangirnagar University, Savar, Dhaka-1342, Bangladesh. Telephone:
        PABX:02224491045-51 , Fax:02224491052
      </p>
    </div>
  </body>
</html>
?>
