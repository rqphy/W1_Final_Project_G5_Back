<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add an animal</title>
  <link rel="stylesheet" href="../css/add.css">
</head>
<body>
  <a href="back_office.php" class="link">Back Office</a>
  <h1 class="title">Add an animal</h1>
  <form action="../admin.php" method="GET" class="add">
    <label for="zone" class="add__label">zone:</label>
    <input type="number" id="zone" name="zone" required placeholder="2">
    <label for="name" class="add__label">name:</label>
    <input type="text" id="name" name="name" required placeholder="Mariette">
    <label for="weight" class="add__label">weight:</label>
    <input type="text" id="weight" name="weight" placeholder="123kg">
    <label for="size" class="add__label">size:</label>
    <input type="text" id="size" name="size" placeholder="130cm">
    <label for="longevity" class="add__label">longevity:</label>
    <input type="text" id="longevity" name="longevity" placeholder="1 year">
    <label for="reproduction" class="add__label">reproduction:</label>
    <input type="text" id="reproduction" name="reproduction" placeholder="1 year">
    <label for="family" class="add__label">family:</label>
    <input type="text" id="family" name="family" placeholder="Human">
    <label for="species" class="add__label">species:</label>
    <input type="text" id="species" name="species" placeholder="Human">
    <label for="link" class="add__label">link:</label>
    <input type="text" id="link" name="link" placeholder="mariette" required>
    <label for="video_link" class="add__label">video_link:</label>
    <input type="text" id="video_link" name="video_link" placeholder="FkZlqbTlKlQ">
    <label for="details" class="add__label">details:</label>
    <input type="text" id="details" name="details" placerholder="">
    <button>Submit</button>
  </form>
</body>
</html>