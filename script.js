// Git Workflow Simulation Script

let count = 0

function showMessage() {

    alert("Terima kasih telah mencoba simulasi Git Workflow pada praktikum PMPL Kelompok 3.");

    count++
    document.getElementById("counter").innerText = count;
}

console.log("Git Workflow Simulation loaded.");

function toggleMode() {
    document.body.classList.toggle("dark-mode");
}