<div>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Kiblat Compass</h1>
        <div id="compass"
            class="w-32 h-32 bg-white rounded-full shadow-md mx-auto mb-4 flex items-center justify-center">
            <div id="arrow" class="w-16 h-2 bg-red-500 transform rotate-0 origin-left"></div>
        </div>
        <p id="direction" class="text-center text-xl font-bold mb-4">Loading...</p>
    </div>

    @push('scripts')
    <script>
        function calculateQiblaDirection(latitude, longitude) {
            const kabahCoordinates = {
                latitude: 21.422487,
                longitude: 39.826206
            };
            const userCoordinates = {
                latitude,
                longitude
            };

            const y = Math.sin(kabahCoordinates.longitude - userCoordinates.longitude);
            const x =
                Math.cos(kabahCoordinates.latitude) * Math.tan(userCoordinates.latitude) -
                Math.sin(kabahCoordinates.latitude) * Math.cos(kabahCoordinates.longitude - userCoordinates.longitude);

            let qiblaDirection = Math.atan2(y, x) * (180 / Math.PI);
            qiblaDirection = (qiblaDirection + 360) % 360;

            return qiblaDirection;
        }

        function updateCompass() {
            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    const latitude = position.coords.latitude;
                    const longitude = position.coords.longitude;
                    const qiblaDirection = calculateQiblaDirection(latitude, longitude);

                    const compass = document.getElementById("compass");
                    const arrow = document.getElementById("arrow");
                    const direction = document.getElementById("direction");

                    compass.style.transform = `rotate(${qiblaDirection}deg)`;
                    direction.innerText = `Arah Kiblat: ${qiblaDirection.toFixed(2)}°`;
                });
            } else {
                alert("Geolocation is not supported in this browser.");
            }
        }

        window.addEventListener("deviceorientation", function(event) {
            const arrow = document.getElementById("arrow");
            arrow.style.transform = `rotate(${-event.alpha}deg)`;
        });

        updateCompass();
    </script>
@endpush
</div>
