
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
    <?php foreach($result as $key=>$row):?>
        <tr>
            <td><?php echo $row['Nom_utilisateur']; ?></td>
            <td><?php echo $row['Ville_d']; ?></td>
            <td><?php echo $row['Ville_a']; ?></td>
            <td><?php echo $row['Heure_d']; ?></td>
            <td><?php echo $row['Name_t']; ?></td>
            <td><?php echo $row['Payement']; ?></td>
            <?php if($row['Archive']==1):?>
                <td><a href="<?= "http://localhost/Brief5/Booking/archive/";?>" class="text-danger">Archive</a></td>
            <?php else:?>
                <td><a href=<?php echo "http://localhost/Brief5/Booking/active/"?> class="text-success">Unarchive</a></td>
            <?php endif;?>
        </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>


<?php require 'footer.php'?>