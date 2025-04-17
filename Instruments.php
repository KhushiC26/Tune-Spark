<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instruments | MusicMaster</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body class="bg-gradient-to-br from-grayindigo-800 via-gray-800 to-gray-800 text-white font-sans m-0">
  <!-- Navbar -->
  <nav class="bg-gray-900 p-4 flex justify-between items-center shadow-lg">
    <div class="text-2xl font-bold text-white-950 flex items-center gap-2">
      <i class=" text-white-950 text-3xl"></i>
      🎶 TuneSpark
    </div>
    <ul class="flex space-x-6 text-sm">
      <li><a href="index.php" class="hover:text-white-900">Home</a></li>
      <li><a href="instruments.php" class="hover:text-white-900 font-bold">Instruments</a></li>
      <li><a href="classes.php" class="hover:text-white-900">Classes</a></li>
      <li><a href="schedule.php" class="hover:text-white-900">Schedule</a></li>
      <li><a href="about.php" class="hover:text-white-900 ">About Us</a></li>
    </ul>
    <div class="flex items-center gap-4">
      <a href="profile.php" class="block w-10 h-10 rounded-full overflow-hidden border-2 border-white-900 hover:ring-2 hover:ring-white-900 transition duration-300">
        <img src="unknown.png" alt="User Profile" class="w-full h-full object-cover">
      </a>
    </div>
  </nav>

  <!-- Instruments Section -->
  <section class="py-20 px-6">
    <h1 class="text-4xl font-bold text-center text-blue-900 mb-12">Our Instruments</h1>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 max-w-6xl mx-auto">
      <div class="bg-white text-gray-800 rounded-xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:-translate-y-1 hover:scale-105">
        <img src="piano.jpg" alt="piano" class="w-full h-48 object-cover cursor-pointer">
        <div class="p-5">
          <h2 class="text-xl font-semibold mb-2">Piano</h2>
          <p>The piano is a versatile and expressive instrument used in nearly every music genre. With 88 keys, it offers both melody and harmony, and is ideal for solo and ensemble performances.</p>
        </div>
      </div>

      <div class="bg-white text-gray-800 rounded-xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:-translate-y-1 hover:scale-105">
        <img src="guitar.jpg" alt="guitar" class="w-full h-48 object-cover cursor-pointer">
        <div class="p-5">
          <h2 class="text-xl font-semibold mb-2">Guitar</h2>
          <p>The guitar is one of the most popular string instruments. It can be acoustic or electric, and is commonly used in rock, pop, jazz, and classical music for rhythm and solos.</p>
        </div>
      </div>

      <div class="bg-white text-gray-800 rounded-xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:-translate-y-1 hover:scale-105">
        <img src="drums.jpg" alt="drums" class="w-full h-48 object-cover cursor-pointer">
        <div class="p-5">
          <h2 class="text-xl font-semibold mb-2">Drums</h2>
          <p>Drums are the backbone of rhythm in music. They consist of various percussion instruments that help maintain tempo, dynamics, and drive in modern and traditional music forms.</p>
        </div>
      </div>

      <div class="bg-white text-gray-800 rounded-xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:-translate-y-1 hover:scale-105">
        <img src="violin.jpg" alt="violin" class="w-full h-48 object-cover cursor-pointer">
        <div class="p-5">
          <h2 class="text-xl font-semibold mb-2">Violin</h2>
          <p>The violin is a four-stringed instrument played with a bow. It is central to orchestras and chamber music and is known for its expressive tone and emotional depth.</p>
        </div>
      </div>

      <div class="bg-white text-gray-800 rounded-xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:-translate-y-1 hover:scale-105">
        <img src="flute.jpg" alt="flute" class="w-full h-48 object-cover cursor-pointer">
        <div class="p-5">
          <h2 class="text-xl font-semibold mb-2">Flute</h2>
          <p>The flute is a woodwind instrument that produces sound from the flow of air across an opening. It's known for its light, airy sound and is used in classical, jazz, and contemporary styles.</p>
        </div>
      </div>

      <div class="bg-white text-gray-800 rounded-xl shadow-lg overflow-hidden transform transition-transform duration-300 hover:-translate-y-1 hover:scale-105">
        <img src="tabla.jpg" alt="tabla" class="w-full h-48 object-cover cursor-pointer">
        <div class="p-5">
          <h2 class="text-xl font-semibold mb-2">Tabla</h2>
          <p>The tabla is a pair of hand-played drums used in Indian classical music. It requires precision and agility and is revered for its rich rhythmic patterns and intricate sound textures.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal -->
  <div id="instrumentModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center">
    <div class="bg-white text-black p-8 rounded-xl w-96">
      <div class="flex justify-between items-center mb-4">
        <h2 id="modalTitle" class="text-2xl font-semibold"></h2>
        <button onclick="closeModal()" class="text-gray-600 text-2xl">&times;</button>
      </div>
      <div id="modalDescription"></div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-800 text-center text-gray-300 py-6 shadow-inner animate-fade-in">
    <div class="mb-2">
      <p>Contact us at: <a href="mailto:manvendrasinghshekhawat1141@gmail.com" class="text-blue-300 hover:underline">manvendrasinghshekhawat1141@gmail.com</a></p>
      <p>Visit us at: Phagwara , Punjab (144411)</p>
      <p>Phone: +91 6367393936</p>
    </div>
    <p>&copy; 2025 MusicMaster. All rights reserved.</p>
  </footer>

  <script>
    const data = {
      piano: {
        title: "Piano",
        description: `
          <strong>History:</strong> The piano was invented by Bartolomeo Cristofori around the year 1700 in Italy. It evolved from earlier keyboard instruments like the harpsichord and clavichord. Unlike its predecessors, the piano allowed musicians to play both soft and loud sounds, hence the name "fortepiano," meaning "soft-loud."
          <br><br>
          <strong>How to Play:</strong> The piano is played by pressing keys on a keyboard, each of which is connected to a hammer that strikes strings inside the piano. To master the piano, one must learn proper finger placement, hand position, and use pedals for dynamics and sustain.
        `
      },
      guitar: {
        title: "Guitar",
        description: `
          <strong>History:</strong> The guitar has ancient origins, dating back to over 4000 years ago in the form of stringed instruments like the lute. The modern guitar, with its six strings, evolved in Spain in the 15th century and became popular in Western music by the 19th century. 
          <br><br>
          <strong>How to Play:</strong> The guitar is played by strumming or plucking the strings with fingers or a pick. The left hand presses the strings against the fretboard to form different notes and chords. Learning guitar involves developing finger strength and precision, as well as understanding musical notation and tablature.
        `
      },
      drums: {
        title: "Drums",
        description: `
          <strong>History:</strong> Drums are among the oldest musical instruments, dating back to prehistoric times. They were used in tribal rituals and later in military and ceremonial contexts. Modern drums evolved from various percussion instruments used across the globe.
          <br><br>
          <strong>How to Play:</strong> Drums are played by striking them with sticks, brushes, or hands. Different types of drums include the snare drum, bass drum, toms, and cymbals. To play, one must learn to maintain rhythm and coordination while using different techniques to produce various sounds, such as rimshots, rolls, and flams.
        `
      },
      violin: {
        title: "Violin",
        description: `
          <strong>History:</strong> The violin originated in 16th-century Italy and became a central instrument in Western classical music. Over time, it evolved into its modern form, used in orchestras, chamber music, and popular genres.
          <br><br>
          <strong>How to Play:</strong> The violin is played with a bow that is drawn across the strings. The left hand presses the strings against the fingerboard to change the pitch. The player uses different bowing techniques, vibrato, and finger positions to create a range of sounds.
        `
      },
      flute: {
        title: "Flute",
        description: `
          <strong>History:</strong> The flute is one of the oldest musical instruments, dating back over 40,000 years. Its design has evolved from bone and wood into metal, and it is widely used in classical and contemporary music.
          <br><br>
          <strong>How to Play:</strong> The flute is played by blowing air across the opening, creating vibrations that produce sound. The player uses fingerings and embouchure to control pitch and tone.
        `
      },
      tabla: {
        title: "Tabla",
        description: `
          <strong>History:</strong> The tabla is a classical percussion instrument in India, known for its rhythmic complexity. It is played with both hands, and its roots date back to ancient Indian music.
          <br><br>
          <strong>How to Play:</strong> The tabla is played by striking the two drums (the smaller drum, called the "dayan," and the larger one, the "bayan") with the fingers and palms. It involves intricate rhythms and a variety of strokes.
        `
      }
    };

    // Event listener to open modal
    document.querySelectorAll("img").forEach((img) => {
      img.addEventListener("click", function () {
        const instrument = img.alt;
        openModal(instrument);
      });
    });

    // Open modal function
    function openModal(instrument) {
      const modal = document.getElementById("instrumentModal");
      const modalTitle = document.getElementById("modalTitle");
      const modalDescription = document.getElementById("modalDescription");

      modalTitle.textContent = data[instrument].title;
      modalDescription.innerHTML = data[instrument].description;

      modal.classList.remove("hidden");
    }

    // Close modal function
    function closeModal() {
      document.getElementById("instrumentModal").classList.add("hidden");
    }
  </script>
</body>

</html>
