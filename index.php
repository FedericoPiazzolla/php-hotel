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

$hotelfiltered = $hotels;

if (isset($_GET['parking']) && $_GET['parking'] !== 'All') {

  $hotelfiltered = array_filter($hotelfiltered, function ($hotel) {
    return ($_GET['parking'] == 'Yes' && $hotel['parking']) || ($_GET['parking'] == 'No' && !$hotel['parking']);
  });

};

if (isset($_GET['vote']) && $_GET['vote'] !== '') {
  $hotelfiltered = array_filter($hotelfiltered, function($hotel) {
    return $hotel['vote'] >= intval($_GET['vote']);
  });
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php Hotel</title>

  <!-- Bootstap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container">

    <h2 class="m-5 text-center">HOTEL LIST</h2>

    <!-- fotm section -->
    <section>
      <form action="index.php" method="GET">
      <!-- filtro per pracheggio incluso -->
        <label for="parking">Filter by Parking included:</label>
        <select name="parking" id="parking" class="form-control">
          <option value="All">All</option>
          <option value="Yes">Whit parking</option>
          <option value="No">Without parking</option>
        </select>
        <!-- /filtro per parcheggio incluso -->

        <!-- Filtro per scegliere la valutazione -->
        <label for="vote">Filter by Vote:</label>
        <input type="number" name="vote" id="vote" class="form-control" min="1" max="5">
        <!-- /filtro per la valutazione -->

        <button type="submit" class="btn btn-primary mt-3 mb-3">Apply Filters</button>
      </form>
    </section>
    <!-- /form section -->

    <!-- table section -->
    <section>
      <table class="table border">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">description</th>
          <th scope="col">Parking</th>
          <th scope="col">Vote</th>
          <th scope="col">Distance to Center</th>
        </tr>

        <?php foreach ($hotelfiltered as $key => $hotel) { ?>
          <tr>
            <td><?php echo $hotel['name']; ?></td>
            <td><?php echo $hotel['description']; ?></td>
            <td><?php echo $hotel['parking'] ? 'yes' : 'no'; ?></td>
            <td><?php echo $hotel['vote']; ?></td>
            <td><?php echo $hotel['distance_to_center']; ?></td>
          </tr>
        <?php } ?>
      </table>

    </section>
    <!-- /table section -->
  </div>

</body>

</html>