<h1>Список книг и читателей</h1>
<ol>
   <?php
   foreach ($userBooks as $userBook) {
       echo '<li>' . $userBook->id_book . ' - ' . $userBook->id_user . '</li>';
   }
   ?>

</ol>
