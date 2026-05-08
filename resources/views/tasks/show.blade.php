<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Detail View</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #f5f7fe 0%, #eef2fa 100%);
            font-family: 'Segoe UI', system-ui, 'Inter', -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 2rem;
        }

        /* DETAIL CARD */
        .detail-container {
            max-width: 650px;
            width: 100%;
            background: white;
            border-radius: 32px;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            transition: all 0.3s ease;
        }

        /* Color header bar */
        .detail-color-bar {
            height: 8px;
            width: 100%;
            transition: background 0.2s ease;
        }

        .detail-content {
            padding: 32px 34px 38px;
        }

        /* Header section */
        .detail-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 28px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .title-section {
            flex: 1;
        }

        .task-title {
            font-size: 1.9rem;
            font-weight: 800;
            background: linear-gradient(120deg, #1e2b3c, #2c3e66);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            letter-spacing: -0.3px;
            word-break: break-word;
        }

        .task-id {
            font-size: 0.7rem;
            color: #8d9bb0;
            margin-top: 8px;
            font-family: monospace;
        }

        /* Action buttons */
        .action-buttons {
            display: flex;
            gap: 12px;
        }

        .edit-btn, .delete-btn {
            padding: 10px 20px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 0.85rem;
            cursor: pointer;
            transition: 0.2s;
            border: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .edit-btn {
            background: #4c35ff10;
            color: #4c35ff;
            border: 1.5px solid #4c35ff30;
        }

        .edit-btn:hover {
            background: #4c35ff;
            color: white;
            transform: translateY(-2px);
        }

        .delete-btn {
            background: #fee2e2;
            color: #c0392b;
            border: 1px solid #fccaca;
        }

        .delete-btn:hover {
            background: #fccaca;
            transform: translateY(-2px);
        }

        /* Detail fields */
        .detail-field {
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #edf2f7;
        }

        .detail-field:last-of-type {
            border-bottom: none;
        }

        .detail-label {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            color: #5f7f9e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .detail-label i {
            font-size: 0.8rem;
            color: #4c35ff;
        }

        .detail-value {
            font-size: 1rem;
            font-weight: 500;
            color: #1a2c3e;
            line-height: 1.55;
            word-break: break-word;
        }

        /* Color preview */
        .color-preview-wrapper {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .color-preview-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 3px solid white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }

        .color-hex {
            font-family: monospace;
            background: #f1f5f9;
            padding: 6px 14px;
            border-radius: 40px;
            font-size: 0.85rem;
        }

        /* Status & Priority badges */
        .status-badge, .priority-badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 8px 20px;
            border-radius: 60px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        .status-badge {
            background: #eef2ff;
            color: #2c3e66;
        }

        .priority-badge {
            background: #fff4e6;
            color: #e67e22;
        }

        .priority-badge.high {
            background: #fee2e2;
            color: #c0392b;
        }

        .priority-badge.medium {
            background: #fff4e6;
            color: #e67e22;
        }

        .priority-badge.low {
            background: #e8f8f0;
            color: #27ae60;
        }

        /* Description box */
        .description-box {
            background: #fafcff;
            border-radius: 20px;
            padding: 16px 20px;
            margin-top: 8px;
            border: 1px solid #eef2f8;
            line-height: 1.6;
        }

        /* Empty / placeholder state */
        .empty-detail {
            text-align: center;
            padding: 60px 30px;
            color: #a0b3cc;
        }

        .empty-detail i {
            font-size: 64px;
            opacity: 0.4;
            margin-bottom: 20px;
            display: block;
        }

        /* Loading skeleton */
        .skeleton {
            animation: pulse 1.2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 0.4; }
            50% { opacity: 0.7; }
        }

        /* Responsive */
        @media (max-width: 550px) {
            .detail-content {
                padding: 24px 20px;
            }
            .task-title {
                font-size: 1.5rem;
            }
            .action-buttons {
                width: 100%;
                justify-content: flex-start;
            }
        }

        /* Tooltip / meta */
        .meta-date {
            display: flex;
            align-items: center;
            gap: 8px;
            background: #f8fafd;
            padding: 6px 14px;
            border-radius: 40px;
            width: fit-content;
            font-size: 0.85rem;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="detail-container" id="detailContainer">
        <div class="detail-color-bar" id="colorBar" style="background: #4c35ff;"></div>
        <div class="detail-content" id="detailContent">
            <!-- Dynamic content will be injected here -->
            <div class="empty-detail">
                <i class="fas fa-folder-open"></i>
                <h3>No Task Selected</h3>
                <p style="margin-top: 8px;">Select a task to view its complete details</p>
            </div>
        </div>
    </div>

    <script>
        // ========================
        // TASK DETAIL COMPONENT
        // ========================
        // This is a standalone detail view that can render any task data.
        // You can pass a task object to `renderTaskDetail(task)` function.
        
        // Sample task data for demonstration (simulating a task received from backend)
        const sampleTask = {
            id: "task_42",
            title: "Redesign User Dashboard",
            description: "Create a modern dashboard with analytics widgets, dark mode support, and responsive layout. Need to integrate new API endpoints for real-time data. Also include user preference settings and export functionality.",
            due_date: "2026-06-15",
            color: "#4c35ff",
            status: "In Progress",
            priority: "High",
            created_at: "2026-05-01T10:30:00Z",
            updated_at: "2026-05-08T14:22:00Z"
        };

        const sampleTask2 = {
            id: "task_99",
            title: "Write Technical Documentation",
            description: "Complete API documentation with Swagger. Include authentication flow, error codes, and example requests/responses for all endpoints.",
            due_date: "2026-05-25",
            color: "#20c997",
            status: "Active",
            priority: "Medium",
            created_at: "2026-05-03T09:15:00Z"
        };

        const sampleTask3 = {
            id: "task_101",
            title: "Fix Navigation Bug",
            description: "Mobile menu not closing properly on touch devices. Investigate and fix the JavaScript event listeners.",
            due_date: "2026-05-12",
            color: "#f39c12",
            status: "On Hold",
            priority: "Low",
            created_at: "2026-05-07T11:45:00Z"
        };

        // Helper: format date nicely
        function formatDate(dateString) {
            if (!dateString) return "Not set";
            const date = new Date(dateString);
            if (isNaN(date.getTime())) return dateString;
            return date.toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
        }

        function formatDateTime(dateString) {
            if (!dateString) return "Unknown";
            const date = new Date(dateString);
            if (isNaN(date.getTime())) return dateString;
            return date.toLocaleString('en-US', { year: 'numeric', month: 'short', day: 'numeric', hour: '2-digit', minute: '2-digit' });
        }

        // Get priority class for styling
        function getPriorityClass(priority) {
            if (!priority) return 'medium';
            const p = priority.toLowerCase();
            if (p === 'high') return 'high';
            if (p === 'low') return 'low';
            return 'medium';
        }

        // Get color name helper (optional)
        function getColorName(hex) {
            const colors = {
                "#4c35ff": "Indigo",
                "#ff6b6b": "Coral",
                "#20c997": "Teal",
                "#f39c12": "Amber",
                "#9b59b6": "Purple",
                "#e84393": "Rose",
                "#2ecc71": "Emerald",
                "#3498db": "Sky Blue"
            };
            return colors[hex] || "Custom";
        }

        // Main render function: displays task details in the container
        function renderTaskDetail(task) {
            const container = document.getElementById("detailContent");
            const colorBar = document.getElementById("colorBar");
            
            if (!task || !task.id) {
                // Show empty state
                if (container) {
                    container.innerHTML = `
                        <div class="empty-detail">
                            <i class="fas fa-folder-open"></i>
                            <h3>No Task Selected</h3>
                            <p style="margin-top: 8px;">Select a task to view its complete details</p>
                        </div>
                    `;
                }
                if (colorBar) colorBar.style.background = "#4c35ff30";
                return;
            }

            // Update color bar
            if (colorBar) colorBar.style.background = task.color || "#4c35ff";

            const formattedDueDate = formatDate(task.due_date);
            const priorityClass = getPriorityClass(task.priority);
            const colorName = getColorName(task.color);
            const createdDate = formatDateTime(task.created_at);
            const updatedDate = formatDateTime(task.updated_at);

            // Build status icon based on status text
            let statusIcon = '<i class="fas fa-play-circle"></i>';
            if (task.status === "Completed") statusIcon = '<i class="fas fa-check-circle"></i>';
            else if (task.status === "In Progress") statusIcon = '<i class="fas fa-sync-alt"></i>';
            else if (task.status === "On Hold") statusIcon = '<i class="fas fa-pause-circle"></i>';
            
            let priorityIcon = '<i class="fas fa-flag"></i>';
            if (task.priority === "High") priorityIcon = '<i class="fas fa-fire"></i>';
            else if (task.priority === "Low") priorityIcon = '<i class="fas fa-leaf"></i>';
            
            const detailHTML = `
                <div class="detail-header">
                    <div class="title-section">
                        <h1 class="task-title">${escapeHtml(task.title)}</h1>
                        <div class="task-id">
                            <i class="fas fa-hashtag"></i> ID: ${escapeHtml(task.id)}
                        </div>
                    </div>
                    <div class="action-buttons">
                        <button class="edit-btn" id="editTaskBtn" onclick="onEditTask('${task.id}')">
                            <i class="fas fa-pen"></i> Edit
                        </button>
                        <button class="delete-btn" id="deleteTaskBtn" onclick="onDeleteTask('${task.id}')">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    </div>
                </div>

                <!-- DESCRIPTION FIELD (important) -->
                <div class="detail-field">
                    <div class="detail-label">
                        <i class="fas fa-align-left"></i> DESCRIPTION
                    </div>
                    <div class="description-box">
                        ${task.description ? escapeHtml(task.description) : '<span style="color: #aaa;"><i class="far fa-file-alt"></i> No description provided</span>'}
                    </div>
                </div>

                <!-- DUE DATE -->
                <div class="detail-field">
                    <div class="detail-label">
                        <i class="far fa-calendar-alt"></i> DUE DATE
                    </div>
                    <div class="detail-value">
                        <span class="meta-date">
                            <i class="far fa-calendar-check"></i> ${formattedDueDate}
                            ${task.due_date && new Date(task.due_date) < new Date() ? '<span style="color:#c0392b; margin-left:8px;">⚠️ Overdue</span>' : ''}
                        </span>
                    </div>
                </div>

                <!-- COLOR -->
                <div class="detail-field">
                    <div class="detail-label">
                        <i class="fas fa-palette"></i> COLOR
                    </div>
                    <div class="detail-value">
                        <div class="color-preview-wrapper">
                            <div class="color-preview-circle" style="background: ${task.color};"></div>
                            <span class="color-hex">${task.color} (${colorName})</span>
                        </div>
                    </div>
                </div>

                <!-- STATUS -->
                <div class="detail-field">
                    <div class="detail-label">
                        <i class="fas fa-chart-line"></i> STATUS
                    </div>
                    <div class="detail-value">
                        <span class="status-badge">
                            ${statusIcon} ${escapeHtml(task.status)}
                        </span>
                    </div>
                </div>

                <!-- PRIORITY -->
                <div class="detail-field">
                    <div class="detail-label">
                        <i class="fas fa-flag-checkered"></i> PRIORITY
                    </div>
                    <div class="detail-value">
                        <span class="priority-badge ${priorityClass}">
                            ${priorityIcon} ${escapeHtml(task.priority)}
                        </span>
                    </div>
                </div>

                <!-- METADATA (timestamps) -->
                <div class="detail-field">
                    <div class="detail-label">
                        <i class="fas fa-info-circle"></i> METADATA
                    </div>
                    <div class="detail-value" style="display: flex; flex-wrap: wrap; gap: 16px; font-size: 0.8rem;">
                        <span><i class="far fa-clock"></i> Created: ${createdDate}</span>
                        ${task.updated_at ? `<span><i class="fas fa-edit"></i> Updated: ${updatedDate}</span>` : ''}
                    </div>
                </div>
            `;
            
            if (container) {
                container.innerHTML = detailHTML;
            }
        }

        // Escape HTML to prevent XSS
        function escapeHtml(str) {
            if (!str) return "";
            return String(str).replace(/[&<>]/g, function(m) {
                if (m === '&') return '&amp;';
                if (m === '<') return '&lt;';
                if (m === '>') return '&gt;';
                return m;
            }).replace(/[\uD800-\uDBFF][\uDC00-\uDFFF]/g, function(c) {
                return c;
            });
        }

        // ========== EDIT / DELETE CALLBACKS (you can override these) ==========
        // These functions are just placeholders. You can connect them to your backend logic.
        window.onEditTask = function(taskId) {
            console.log("Edit task clicked for ID:", taskId);
            alert(`✏️ Edit action triggered for task ${taskId}\n\nYou can connect this to your edit form/modal.`);
            // Example: redirect to edit page or open edit modal
            // window.location.href = `/edit-task/${taskId}`;
            // or open a popup with task data pre-filled
        };

        window.onDeleteTask = function(taskId) {
            console.log("Delete task clicked for ID:", taskId);
            if (confirm(`⚠️ Are you sure you want to delete task "${taskId}"?`)) {
                alert(`🗑️ Task ${taskId} would be deleted here.\nConnect this to your API backend.`);
                // Example API call:
                // fetch(`/api/tasks/${taskId}`, { method: 'DELETE' })
                //    .then(() => { /* refresh list */ });
            }
        };

        // ========== DEMO: Switch between sample tasks to see detail updates ==========
        // This shows how you can dynamically load any task into the detail view.
        let currentDemoIndex = 0;
        const demoTasks = [sampleTask, sampleTask2, sampleTask3];

        function cycleDemoTask() {
            currentDemoIndex = (currentDemoIndex + 1) % demoTasks.length;
            renderTaskDetail(demoTasks[currentDemoIndex]);
        }

        // Auto-load first sample task to demonstrate the detail page
        // In real usage, you would call renderTaskDetail(yourTaskObject) when user selects a task.
        setTimeout(() => {
            renderTaskDetail(sampleTask);
        }, 100);

        // Optional: Add a floating button for demo purposes (only to show different tasks)
        const demoBtn = document.createElement('button');
        demoBtn.innerHTML = '<i class="fas fa-exchange-alt"></i> Demo: Next Task';
        demoBtn.style.position = 'fixed';
        demoBtn.style.bottom = '24px';
        demoBtn.style.right = '24px';
        demoBtn.style.backgroundColor = '#4c35ff';
        demoBtn.style.color = 'white';
        demoBtn.style.border = 'none';
        demoBtn.style.padding = '12px 24px';
        demoBtn.style.borderRadius = '40px';
        demoBtn.style.fontWeight = '600';
        demoBtn.style.cursor = 'pointer';
        demoBtn.style.boxShadow = '0 6px 16px rgba(76,53,255,0.3)';
        demoBtn.style.zIndex = '1000';
        demoBtn.style.fontFamily = 'inherit';
        demoBtn.onclick = cycleDemoTask;
        document.body.appendChild(demoBtn);
        
        
    </script>
</body>
</html>