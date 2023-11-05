document.addEventListener("DOMContentLoaded", function () {
    const timeInfoElements = document.querySelectorAll(".time-info");

    function updateTime(timeInfoElement, timezone) {
        const currentTime = new Date();
        const offset = currentTime.getTimezoneOffset() * 60000;
        const time = new Date(currentTime.getTime() + offset + (3600000 * new Date().getTimezoneOffset() * -1));
        const formattedTime = time.toLocaleString("en-US", { timeZone: timezone });
        timeInfoElement.textContent = "Current Time: " + formattedTime;
    }

    function updateAllTimes() {
        timeInfoElements.forEach(function (timeInfoElement) {
            const timezone = timeInfoElement.getAttribute("data-timezone");
            updateTime(timeInfoElement, timezone);
        });
    }

        updateAllTimes();

    // Update the time every 0.1 seconds
    setInterval(updateAllTimes, 100);
});
