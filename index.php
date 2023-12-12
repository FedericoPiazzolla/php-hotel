<?php
  $hotels = [
    [
      'name' => 'Hotel Belvedere',
      'description' => 'Hotel Belvedere Descrizione',
      'parking' => true,
      'vote' => 4,
      'distance_to_center' => 10.4
    ],
    [
      'name' => 'Hotel Futuro',
      'description' => 'Hotel Futuro Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 2
    ],
    [
      'name' => 'Hotel Rivamare',
      'description' => 'Hotel Rivamare Descrizione',
      'parking' => false,
      'vote' => 1,
      'distance_to_center' => 1
    ],
    [
      'name' => 'Hotel Bellavista',
      'description' => 'Hotel Bellavista Descrizione',
      'parking' => false,
      'vote' => 5,
      'distance_to_center' => 5.5
    ],
    [
      'name' => 'Hotel Milano',
      'description' => 'Hotel Milano Descrizione',
      'parking' => true,
      'vote' => 2,
      'distance_to_center' => 50
    ],
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php Hotel</title>
</head>
<body>
  <h2>Hotel List</h2>

  <table>
    <tr>
      <th>Name</th>
      <th>description</th>
      <th>Parking</th>
      <th>Vote</th>
      <th>Distance to Center</th>
    </tr>

    <?php foreach($hotels as $key => $hotel) { ?>
      <tr>
        <td><?php echo $hotel['name']; ?></td>
        <td><?php echo $hotel['description']; ?></td>
        <td><?php echo $hotel['parking'] ? 'yes': 'no'; ?></td>
        <td><?php echo $hotel['vote']; ?></td>
        <td><?php echo $hotel['distance_to_center']; ?></td>
      </tr>
    <?php } ?>
  </table>
</body>
</html>