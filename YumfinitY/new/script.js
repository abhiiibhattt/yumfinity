<script>
    document.addEventListener("DOMContentLoaded", function () {
        const form = document.querySelector("form");

        form.addEventListener("submit", function (event) {
            if (!validateForm()) {
                event.preventDefault();
            }
        });

        function validateForm() {
            const firstName = document.getElementById("first_name").value;
            const lastName = document.getElementById("last_name").value;
            const contactNumber = document.getElementById("contact_number").value;
            const streetLocality = document.getElementById("street_locality").value;
            const area = document.getElementById("area").value;
            const city = document.getElementById("city").value;
            const pincode = document.getElementById("pincode").value;
            const state = document.getElementById("state").value;

            if (firstName === "" || lastName === "" || contactNumber === "" || streetLocality === "" || area === "" || city === "" || pincode === "" || state === "") {
                alert("Please fill in all required fields.");
                return false;
            }

            // You can add more complex validation logic here if needed.

            return true;
        }
    });
</script>
