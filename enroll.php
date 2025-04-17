<!DOCTYPE html>
<html lang="en">

<head> 
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Enroll in Music Class</title>

  <!-- Tailwind CSS via CDN (no script config) -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

  <!-- Enroll Form -->
  <div class="max-w-4xl mx-auto p-8 bg-white rounded-xl shadow-lg mt-12">
    <h2 class="text-3xl font-bold text-center text-purple-800 mb-8">Enroll in Music Class</h2>
    <form action="submit_enrollment.php" method="POST">
      <!-- Hidden field to specify the class level -->
      <input type="hidden" name="class_level" value="<?php echo $_GET['level']; ?>">

      <div class="space-y-6">
        <!-- Name -->
        <div>
          <label for="name" class="block text-sm font-semibold text-gray-900">Full Name</label>
          <input type="text" id="name" name="name" class="w-full p-3 border rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your full name" required />
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-sm font-semibold text-gray-900">Email Address</label>
          <input type="email" id="email" name="email" class="w-full p-3 border rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your email" required />
        </div>

        <!-- Phone Number -->
        <div>
          <label for="phone" class="block text-sm font-semibold text-gray-900">Phone Number</label>
          <input type="tel" id="phone" name="phone" class="w-full p-3 border rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-400" placeholder="Enter your phone number" required />
        </div>

        <!-- Preferred Slot -->
        <div>
          <label for="preferred_slot" class="block text-sm font-semibold text-gray-900">Preferred Slot</label>
          <select id="preferred_slot" name="preferred_slot" class="w-full p-3 border rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
            <option value="Mon, Wed, Fri – 5:00 PM to 5:45 PM">Mon, Wed, Fri – 5:00 PM to 5:45 PM</option>
            <option value="Tue, Thu – 6:00 PM to 7:00 PM">Tue, Thu – 6:00 PM to 7:00 PM</option>
            <option value="Sat, Sun – 4:00 PM to 5:15 PM">Sat, Sun – 4:00 PM to 5:15 PM</option>
          </select>
        </div>

        <!-- Instrument Selection -->
        <div>
          <label for="instrument" class="block text-sm font-semibold text-gray-900">Select Instrument</label>
          <select id="instrument" name="instrument" class="w-full p-3 border rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-yellow-400" required>
            <option value="">-- Choose an instrument --</option>
            <option value="Piano">Piano</option>
            <option value="Guitar">Guitar</option>
            <option value="Violin">Violin</option>
            <option value="Drums">Drums</option>
            <option value="Flute">Flute</option>
            <option value="Tabla">Tabla</option>
          </select>
        </div>

        <!-- Payment Mode Section -->
<div class="mt-8">
  <h3 class="text-xl font-semibold text-gray-900 mb-2">Select Payment Mode</h3>

  <!-- Google Pay Option with UPI -->
  <label class="flex items-center gap-3 mt-4 p-3 border rounded-lg hover:bg-indigo-50">
    <svg fill="currentColor" class="w-6 h-6 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <img class="w-5 h-5 -ml-9" src="gpay.jpg">
    </svg>
    Google Pay (UPI)
    <input type="radio" name="payment_mode" value="Google Pay" onclick="document.getElementById('upiField').classList.remove('hidden')" class="ml-auto checked:border-indigo-500 focus:ring-indigo-500" required />
  </label>

  <!-- PayPal Option -->
  <label class="flex items-center gap-3 mt-4 p-3 border rounded-lg hover:bg-blue-50">
    <svg fill="currentColor" class="w-6 h-6 text-blue-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M4 4h16v4H4zM4 10h16v10H4z"/>
    </svg>
    PayPal
    <input type="radio" name="payment_mode" value="PayPal" onclick="document.getElementById('upiField').classList.add('hidden')" class="ml-auto checked:border-blue-500 focus:ring-blue-500" />
  </label>

  <!-- Credit Card Option -->
  <label class="flex items-center gap-3 mt-4 p-3 border rounded-lg hover:bg-gray-100">
    <svg fill="currentColor" class="w-6 h-6 text-gray-700" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
      <path d="M2 4h20v2H2V4zm0 4h20v12H2V8zm2 2v2h6v-2H4zm0 4v2h4v-2H4z"/>
    </svg>
    Credit Card
    <input type="radio" name="payment_mode" value="Credit Card" onclick="document.getElementById('upiField').classList.add('hidden')" class="ml-auto checked:border-gray-500 focus:ring-gray-500" />
  </label>

  <!-- UPI Field for Google Pay -->
  <div id="upiField" class="mt-4 hidden">
    <label for="upi_id" class="block text-sm font-semibold text-gray-900 mb-1 mt-4">Enter UPI ID</label>
    <input type="text" name="upi_id" id="upi_id" class="w-full p-3 border rounded-md text-gray-800 focus:outline-none focus:ring-2 focus:ring-indigo-400" placeholder="e.g., yourname@upi" pattern=".+@.+\..+" />
    <p class="text-sm text-gray-500 mt-1">Make sure this UPI is linked to your Google Pay.</p>
  </div>
</div>


       <!-- Submit Button -->
<div>
  <button
    type="submit"
    onclick="alert('Your enrollment has been submitted!'); window.location.href='schedule.php'; return false;"
    class="w-full bg-yellow-400 hover:bg-yellow-500 text-gray-900 font-bold py-3 rounded-md transition"
  >
    Submit Enrollment
  </button>
</div>


      </div>
    </form>
  </div>

</body>
</html>
