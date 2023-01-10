<!DOCTYPE html>
<html lang="en">

<head>
   <?php $this->load->view('admin/_partials/head.php') ?>
</head>

<body>
   <main class="main">
      <?php $this->load->view('admin/_partials/side_nav.php') ?>
      <div class="content">
         <h1>Feedback</h1>
         <div class="card">
            <div class="card-header">
               <div>
                  <strong>Why</strong>
                  <small class="text-gray">adni@news.com</small>
               </div>
               <div>
                  <small class="text-gray">28 Desember 2022</small>
               </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut cumque quos a exercitationem debitis eligendi facere quam tempora nihil deserunt vel temporibus, aspernatur vitae. Sapiente assumenda qui sequi facilis provident!</p>
            <a href="#" class="button button-danger button-small">Delete</a>
         </div>
         <?php $this->load->view('admin/_partials/footer.php') ?>
      </div>
   </main>
</body>

</html>