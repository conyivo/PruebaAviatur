<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Hoteles</title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
   </head>

<body class="bg-gray-100">
<div class="bg-blue-600 py-16 px-8">
<svg class="w-48 fill-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 292.138 50.269001"><path fill="#fff" d="M69.749 1.006s-6.846 19.852-8.304 23.493c-1.288-3.191-8.356-23.493-8.356-23.493H41.314l20.225 49.263L81.821 1.006H69.749zM277.492 30.885l-.358-.493c3.54-1.624 6.312-4.563 7.755-8.214.693-1.727 1.071-3.624 1.071-5.599 0-3.258-1.022-6.256-2.755-8.738-.784-1.241-1.787-2.316-3.063-3.223-.749-.556-1.595-1.04-2.528-1.468-.23-.103-.483-.222-.734-.322-.051-.023-.087-.036-.14-.064-1.455-.565-3.09-.99-4.939-1.275-.398-.061-.792-.117-1.21-.171-.445-.048-.907-.078-1.363-.12-1.25-.1-2.558-.159-3.981-.159l-3.231-.029h-1.02l-1.108-.004L249.506 1v48.19h11.49V11.139h6.154c2.038.026 3.882.847 5.247 2.152 1.13 1.145 1.913 2.649 2.144 4.354.01.233.027.493.027.743 0 2.121-.841 4.134-2.175 5.59-1.647 1.438-3.766 2.314-6.095 2.324h-5.181c.6.878 1.546 2.237 2.884 3.99.046.05.09.131.153.201.391.511.806 1.056 1.234 1.609 5.423 7.065 13.39 17.088 13.39 17.088h13.36c-.001 0-10.054-12.544-14.646-18.305m-10.197-19.747h-.05c.01-.007.017-.007.042-.007h.102c-.025 0-.061 0-.094.007m2.387.382c.049.011.104.015.153.04h.003c-.045-.026-.097-.03-.156-.04M185.796 1.006h-31.271v10.756h10.035V49.19h11.209V11.762h10.027zM224.097 1.006v27.903c0 10.315-5.068 10.315-7.221 10.315-2.169 0-7.234 0-7.234-10.315V1.006h-11.21v29.698c0 11.412 7.586 19.389 18.444 19.389 10.847 0 18.424-7.977 18.424-19.389V1.006h-11.203zM22.525 0L0 49.19h12.368l2.49-6.85h15.325l2.511 6.85h12.368L22.525 0zm-.034 20.395l4.212 11.935h-8.368l4.156-11.935zM131.382 0l-22.525 49.19h12.365l2.492-6.85h15.331l2.498 6.85h12.376L131.382 0zm-.04 20.395l4.218 11.935h-8.363l4.145-11.935zM89.857994 1.0060015h11.199v48.183998h-11.199z"/></svg>
    </div>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-4">Hoteles para todos los gustos</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <?php
               $data = file_get_contents('data/data.json');
            $hotels = json_decode($data, true);

            foreach ($hotels as $hotel) {
                ?>
                <div class="bg-white rounded-lg shadow-md p-4">
    <img src="assets/images/hotels/<?php echo $hotel['image']; ?>" alt="<?php echo $hotel['name']; ?>" class="w-full h-32 object-cover mb-4 rounded">
    <h2 class="text-xl font-bold mb-2"><?php echo $hotel['name']; ?></h2>
    <p class="text-gray-600 mb-2">
        <?php
        for ($i = 0; $i < $hotel['stars']; $i++) {
            echo '<img src="assets/images/star.png" alt="Star" class="w-4 h-4 inline-block">';
        }
        ?>
    </p>
    <ul class="pl-5">
    <?php foreach ($hotel['amenities'] as $amenity): ?>
        <li class="text-gray-600 mb-2">
            <img src="assets/icons/amenities/<?php echo $amenity; ?>.svg" alt="<?php echo $amenity; ?>" class="inline-block mr-2 h-5 w-5">
            <?php echo $amenity; ?>
        </li>
    <?php endforeach; ?>
</ul> 

<p class="text-gray-900 font-bold text-xl text-right">$<?php echo $hotel['price']; ?></p>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
        Ver más
    </button>
</div>

            <?php } ?>
        </div>
    </div>
</body>

</html>

