<div>

    <!-- BUTTON -->
    <div class="top-actions">
        <button class="add-task-btn" onclick="openPopup()">
            + Add Task
        </button>
    </div>


    <!-- POPUP -->
    <div class="popup-overlay" id="popupForm">

        <div class="popup-box">

            <!-- HEADER -->
            <div class="popup-header">

                <h2>Add New Task</h2>

                <button class="close-btn" onclick="closePopup()">
                    &times;
                </button>

            </div>


            <!-- FORM (ENHANCED: with DETAILS field + Color + Status + Priority) -->
            <form action="" method="POST" id="taskForm">

                @csrf

                <div class="form-group">
                    <label>📌 Task Name</label>
                    <input type="text" name="title" id="taskName" placeholder="Enter task name" required>
                </div>

                <!-- NEW: DETAIL / DESCRIPTION FIELD -->
                <div class="form-group">
                    <label>📝 Description / Details</label>
                    <textarea name="description" id="taskDescription" rows="4" placeholder="Write additional details, notes, subtasks, or comments..."></textarea>
                </div>

                <div class="form-group">
                    <label>📅 Due Date</label>
                    <input type="date" name="due_date" id="dueDate">
                </div>

                <!-- COLOR PICKER -->
                <div class="form-group">
                    <label>🎨 Task Color</label>
                    <div class="color-palette" id="colorPaletteContainer">
                        <!-- Color chips will be injected here -->
                    </div>
                    <input type="hidden" name="task_color" id="taskColorValue" value="#4c35ff">
                    <small id="colorHint" style="display: block; margin-top: 8px; font-size: 12px; color: #666;"></small>
                </div>

                <!-- STATUS SELECTOR -->
                <div class="form-group">
                    <label>📊 Status</label>
                    <div class="status-group" id="statusGroup">
                        <div class="status-option" data-status="Active">
                            ✅ Active
                        </div>
                        <div class="status-option" data-status="In Progress">
                            🔄 In Progress
                        </div>
                        <div class="status-option" data-status="Completed">
                            ✔️ Completed
                        </div>
                        <div class="status-option" data-status="On Hold">
                            ⏸️ On Hold
                        </div>
                    </div>
                    <input type="hidden" name="status" id="taskStatusValue" value="Active">
                </div>

                <!-- PRIORITY (visual buttons) -->
                <div class="form-group">
                    <label>⚡ Priority</label>
                    <div class="priority-group" id="priorityGroup">
                        <div class="priority-btn" data-priority="High">
                            🔴 High
                        </div>
                        <div class="priority-btn" data-priority="Medium">
                            🟠 Medium
                        </div>
                        <div class="priority-btn" data-priority="Low">
                            🟢 Low
                        </div>
                    </div>
                    <input type="hidden" name="priority" id="taskPriorityValue" value="Medium">
                </div>

                <button type="submit" class="submit-btn">
                    Save Task
                </button>

            </form>

        </div>

    </div>

</div>


<style>

/* TOP BUTTON */

.top-actions{
    display:flex;
    justify-content:flex-end;
    margin-bottom:30px;
}

.add-task-btn{
    background:#4c35ff;
    color:white;
    border:none;
    padding:14px 24px;
    border-radius:14px;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
    box-shadow:0 6px 16px rgba(76,53,255,0.25);
}

.add-task-btn:hover{
    transform:translateY(-2px);
    background:#3725cc;
}


/* POPUP BACKGROUND */

.popup-overlay{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.45);

    display:none;
    justify-content:center;
    align-items:center;

    z-index:999;
    padding:20px;
}


/* POPUP BOX */

.popup-box{
    width:100%;
    max-width:500px;

    background:white;
    border-radius:28px;

    padding:30px;

    animation:popupAnimation 0.25s ease;
    box-shadow:0 10px 30px rgba(0,0,0,0.15);
}


/* ANIMATION */

@keyframes popupAnimation{

    from{
        opacity:0;
        transform:scale(0.9);
    }

    to{
        opacity:1;
        transform:scale(1);
    }

}


/* HEADER */

.popup-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.popup-header h2{
    font-size:24px;
    font-weight:700;
    color:#222;
}

.close-btn{
    border:none;
    background:#f4f4f4;
    width:40px;
    height:40px;
    border-radius:50%;
    font-size:24px;
    cursor:pointer;
    transition:0.3s;
}

.close-btn:hover{
    background:#e3e3e3;
}


/* FORM */

.form-group{
    margin-bottom:20px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-size:15px;
    font-weight:600;
    color:#555;
}

.form-group input,
.form-group select,
.form-group textarea{
    width:100%;
    padding:14px;
    border:1px solid #ddd;
    border-radius:14px;
    font-size:15px;
    outline:none;
    transition:0.3s;
    font-family: inherit;
}

.form-group textarea{
    resize: vertical;
    min-height: 80px;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus{
    border-color:#4c35ff;
    box-shadow:0 0 0 4px rgba(76,53,255,0.1);
}


/* SUBMIT BUTTON */

.submit-btn{
    width:100%;
    padding:15px;
    border:none;
    border-radius:14px;
    background:#4c35ff;
    color:white;
    font-size:16px;
    font-weight:600;
    cursor:pointer;
    transition:0.3s;
    margin-top:10px;
}

.submit-btn:hover{
    background:#3725cc;
}


/* RESPONSIVE */

@media(max-width:500px){

    .popup-box{
        padding:24px;
    }

    .popup-header h2{
        font-size:20px;
    }

}

/* COLOR PALETTE STYLES */
.color-palette {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    padding: 10px 0;
}

.color-chip {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    cursor: pointer;
    transition: all 0.2s ease;
    border: 3px solid transparent;
    box-shadow: 0 2px 6px rgba(0,0,0,0.1);
}

.color-chip:hover {
    transform: scale(1.1);
}

.color-chip.active {
    border-color: #333;
    box-shadow: 0 0 0 2px #fff, 0 0 0 4px #4c35ff;
    transform: scale(1.05);
}

/* STATUS GROUP STYLES */
.status-group {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.status-option {
    flex: 1;
    min-width: 90px;
    padding: 10px;
    text-align: center;
    background: #f5f5f5;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 14px;
    font-weight: 500;
    border: 2px solid transparent;
}

.status-option:hover {
    background: #e8e8e8;
}

.status-option.selected-status {
    background: #4c35ff;
    color: white;
    border-color: #4c35ff;
}

/* PRIORITY GROUP STYLES */
.priority-group {
    display: flex;
    gap: 10px;
}

.priority-btn {
    flex: 1;
    padding: 10px;
    text-align: center;
    background: #f5f5f5;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.2s ease;
    font-size: 14px;
    font-weight: 600;
    border: 2px solid transparent;
}

.priority-btn:hover {
    background: #e8e8e8;
}

.priority-btn.selected-priority {
    background: #4c35ff;
    color: white;
    border-color: #4c35ff;
}

</style>


<script>

// Color palette options
const colorOptions = [
    { name: "Indigo", code: "#4c35ff" },
    { name: "Coral", code: "#ff6b6b" },
    { name: "Teal", code: "#20c997" },
    { name: "Amber", code: "#f39c12" },
    { name: "Purple", code: "#9b59b6" },
    { name: "Rose", code: "#e84393" },
    { name: "Emerald", code: "#2ecc71" },
    { name: "Sky", code: "#3498db" }
];

let selectedColor = "#4c35ff";
let selectedStatus = "Active";
let selectedPriority = "Medium";

// Build color palette
function buildColorPalette() {
    const container = document.getElementById("colorPaletteContainer");
    if (!container) return;
    
    container.innerHTML = "";
    colorOptions.forEach(color => {
        const chip = document.createElement("div");
        chip.className = "color-chip";
        chip.style.backgroundColor = color.code;
        chip.setAttribute("data-color", color.code);
        chip.setAttribute("data-name", color.name);
        
        if (color.code === selectedColor) {
            chip.classList.add("active");
        }
        
        chip.onclick = function() {
            document.querySelectorAll(".color-chip").forEach(c => c.classList.remove("active"));
            chip.classList.add("active");
            selectedColor = color.code;
            document.getElementById("taskColorValue").value = selectedColor;
            document.getElementById("colorHint").innerHTML = `✓ Selected: ${color.name}`;
        };
        
        container.appendChild(chip);
    });
    
    const hint = document.getElementById("colorHint");
    if (hint) hint.innerHTML = "✓ Selected: Indigo";
}

// Initialize status selection
function initStatusSelection() {
    const statusOptions = document.querySelectorAll(".status-option");
    statusOptions.forEach(opt => {
        opt.onclick = function() {
            statusOptions.forEach(o => o.classList.remove("selected-status"));
            opt.classList.add("selected-status");
            selectedStatus = opt.getAttribute("data-status");
            document.getElementById("taskStatusValue").value = selectedStatus;
        };
    });
}

// Initialize priority selection
function initPrioritySelection() {
    const priorityBtns = document.querySelectorAll(".priority-btn");
    priorityBtns.forEach(btn => {
        btn.onclick = function() {
            priorityBtns.forEach(b => b.classList.remove("selected-priority"));
            btn.classList.add("selected-priority");
            selectedPriority = btn.getAttribute("data-priority");
            document.getElementById("taskPriorityValue").value = selectedPriority;
        };
    });
}

// Reset form fields
function resetForm() {
    document.getElementById("taskName").value = "";
    document.getElementById("taskDescription").value = "";
    document.getElementById("dueDate").value = "";
    
    // Reset color to default
    selectedColor = "#4c35ff";
    document.getElementById("taskColorValue").value = "#4c35ff";
    document.querySelectorAll(".color-chip").forEach(chip => {
        chip.classList.remove("active");
        if (chip.getAttribute("data-color") === "#4c35ff") {
            chip.classList.add("active");
        }
    });
    document.getElementById("colorHint").innerHTML = "✓ Selected: Indigo";
    
    // Reset status
    selectedStatus = "Active";
    document.getElementById("taskStatusValue").value = "Active";
    document.querySelectorAll(".status-option").forEach(opt => {
        opt.classList.remove("selected-status");
        if (opt.getAttribute("data-status") === "Active") {
            opt.classList.add("selected-status");
        }
    });
    
    // Reset priority
    selectedPriority = "Medium";
    document.getElementById("taskPriorityValue").value = "Medium";
    document.querySelectorAll(".priority-btn").forEach(btn => {
        btn.classList.remove("selected-priority");
        if (btn.getAttribute("data-priority") === "Medium") {
            btn.classList.add("selected-priority");
        }
    });
}

// Handle form submit
function handleFormSubmit(event) {
    event.preventDefault();
    
    const taskName = document.getElementById("taskName").value.trim();
    if (!taskName) {
        alert("❌ Please enter a task name");
        return;
    }
    
    const description = document.getElementById("taskDescription").value.trim() || "No description provided";
    const dueDate = document.getElementById("dueDate").value || "No date set";
    const color = document.getElementById("taskColorValue").value;
    const status = document.getElementById("taskStatusValue").value;
    const priority = document.getElementById("taskPriorityValue").value;
    
    const colorName = colorOptions.find(c => c.code === color)?.name || "Custom";
    
    const formData = {
        title: taskName,
        description: description,
        due_date: dueDate,
        task_color: color,
        color_name: colorName,
        status: status,
        priority: priority,
        created_at: new Date().toISOString()
    };
    
    console.log("📦 Full Task Data:", formData);
    
    // Beautiful alert with all details
    alert(`✅ Task Created Successfully!\n\n` +
          `📌 Title: ${taskName}\n` +
          `📝 Description: ${description.substring(0, 100)}${description.length > 100 ? '...' : ''}\n` +
          `📅 Due Date: ${dueDate}\n` +
          `🎨 Color: ${colorName}\n` +
          `📊 Status: ${status}\n` +
          `⚡ Priority: ${priority}`);
    
    // You can add your AJAX/fetch code here to submit to server
    /*
    fetch("/your-endpoint", {
        method: "POST",
        headers: { 
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value 
        },
        body: JSON.stringify(formData)
    })
    .then(res => res.json())
    .then(data => {
        console.log("Server response:", data);
        if(data.success) {
            alert("Task saved to database!");
        }
    })
    .catch(err => console.error("Error:", err));
    */
    
    resetForm();
    closePopup();
}

function openPopup(){
    resetForm();
    document.getElementById('popupForm').style.display = 'flex';
}

function closePopup(){
    document.getElementById('popupForm').style.display = 'none';
}

/* CLOSE WHEN CLICK OUTSIDE */
window.onclick = function(event){
    let popup = document.getElementById('popupForm');
    if(event.target == popup){
        popup.style.display = "none";
    }
}

// Initialize everything when DOM is ready
document.addEventListener("DOMContentLoaded", function() {
    buildColorPalette();
    initStatusSelection();
    initPrioritySelection();
    
    const form = document.getElementById("taskForm");
    if (form) {
        form.addEventListener("submit", handleFormSubmit);
    }
});

</script>