
  <?php require 'header.php'?>

<div class="container mt-5">
    <h1 class='text-center mb-2'>View Your Booking</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">First name</th>
      <th scope="col">Departure station</th>
      <th scope="col">arrival station </th>
      <th scope="col">departure date </th>      
      <th scope="col">Train name </th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($result as $row):?>
        <tr>
            <td><?php echo $row['Nom_utilisateur']; ?></td>
            <td><?php echo $row['Ville_d']; ?></td>
            <td><?php echo $row['Ville_a']; ?></td>
            <td><?php echo $row['Heure_d']; ?></td>
            <td><?php echo $row['Name_t']; ?></td>
            <td><?php echo $row['Payement']; ?></td>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>


<?php require 'footer.php'?>