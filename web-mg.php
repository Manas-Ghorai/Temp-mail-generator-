<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚡ Temp Mail Pro Innovated by 𝓜.𝓖</title>
    <style>
        :root {
            --bg-gradient: linear-gradient(135deg, #0f172a, #1e1b4b);
            --glass-bg: rgba(255, 255, 255, 0.06);
            --glass-border: rgba(255, 255, 255, 0.1);
            --glass-accent: rgba(99, 102, 241, 0.2);
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --accent-color: #6366f1;
            --accent-hover: #4f46e5;
            --danger-color: #ef4444;
            --success-color: #22c55e;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body, html {
            background: var(--bg-gradient);
            color: var(--text-primary);
            min-height: 100vh;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
        }

        #splash {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #0f172a;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        }
        .splash-logo {
            font-size: 3rem;
            font-weight: 800;
            background: linear-gradient(to right, #818cf8, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1rem;
            transform: scale(0.8);
            animation: pulsePop 1.2s forwards cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }
        .splash-loader {
            width: 40px;
            height: 40px;
            border: 3px solid var(--glass-border);
            border-top-color: var(--accent-color);
            border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }

        @keyframes pulsePop {
            0% { transform: scale(0.8); opacity: 0; }
            50% { transform: scale(1.05); opacity: 1; }
            100% { transform: scale(1); opacity: 1; }
        }
        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        header {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(15, 23, 42, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--glass-border);
            padding: 1rem;
            text-align: center;
        }
        header h1 {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: -0.05em;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            padding: 1rem;
            gap: 1rem;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            margin-bottom: 70px;
        }

        .address-bar {
            background: var(--glass-bg);
            backdrop-filter: blur(6px);
            border: 1px solid var(--glass-border);
            padding: 1rem;
            border-radius: 16px;
            text-align: center;
            word-break: break-all;
            font-weight: 600;
            color: var(--text-primary);
            font-size: 1.1rem;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .panel-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            flex: 1;
        }

        @media (min-width: 768px) {
            .panel-container {
                grid-template-columns: 1fr 1fr;
                height: 65vh;
            }
        }

        .panel {
            background: var(--glass-bg);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            min-height: 300px;
        }

        .panel-title {
            padding: 1rem;
            background: rgba(255, 255, 255, 0.03);
            border-bottom: 1px solid var(--glass-border);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-secondary);
            font-weight: 600;
        }

        .inbox-list {
            overflow-y: auto;
            flex: 1;
        }
        .mail-item {
            padding: 1rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            cursor: pointer;
            transition: background 0.2s ease;
        }
        .mail-item:hover {
            background: var(--glass-accent);
        }
        .mail-item.active {
            background: rgba(99, 102, 241, 0.3);
            border-left: 4px solid var(--accent-color);
        }
        .mail-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: var(--text-secondary);
            margin-bottom: 0.25rem;
        }
        .mail-from {
            font-weight: 600;
            color: var(--text-primary);
        }
        .mail-subject {
            font-size: 0.95rem;
            font-weight: 500;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .empty-state {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            padding: 2rem;
            color: var(--text-secondary);
            text-align: center;
            gap: 0.5rem;
        }

        .mail-viewer {
            flex: 1;
            position: relative;
            background: rgba(255, 255, 255, 0.02);
            height: 100%;
        }

        .action-dock {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.5rem;
            padding: 0.5rem;
        }
        @media (min-width: 576px) {
            .action-dock {
                display: flex;
                justify-content: center;
                gap: 1rem;
            }
        }
        .btn {
            background: var(--glass-bg);
            border: 1px solid var(--glass-border);
            color: var(--text-primary);
            padding: 0.8rem 0.5rem;
            border-radius: 12px;
            font-weight: 600;
            cursor: pointer;
            font-size: 0.8rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.25rem;
            transition: all 0.2s ease;
        }
        @media (min-width: 576px) {
            .btn {
                flex-direction: row;
                padding: 0.8rem 1.5rem;
                font-size: 0.9rem;
                gap: 0.5rem;
            }
        }
        .btn:hover {
            background: var(--glass-accent);
            transform: translateY(-2px);
        }
        .btn-primary {
            background: var(--accent-color);
            border-color: transparent;
        }
        .btn-primary:hover {
            background: var(--accent-hover);
        }
        .btn-danger:hover {
            background: var(--danger-color);
            border-color: transparent;
        }

        #toast {
            position: fixed;
            bottom: 80px;
            left: 50%;
            transform: translateX(-50%) translateY(100px);
            background: var(--accent-color);
            padding: 0.8rem 1.5rem;
            border-radius: 30px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            font-weight: 600;
            z-index: 2000;
            transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            pointer-events: none;
        }
        #toast.show {
            transform: translateX(-50%) translateY(0);
        }

        .banner-ad-container {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 60px;
            background: #0b0f19;
            border-top: 1px solid var(--glass-border);
            z-index: 90;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>

    <!-- Splash Screen -->
    <div id="splash">
        <div class="splash-logo">⚡ Temp Mail Pro</div>
        <div class="splash-loader"></div>
    </div>

    <!-- Header -->
    <header>
        <h1>🦅𝓜.𝓖🦅</h1>
    </header>

    <!-- Main Workspace -->
    <main>
        <div class="address-bar" id="address-display">
            <span>No Active Inbox. Click Generate Below 👇</span>
        </div>

        <div class="action-dock">
            <button class="btn btn-primary" onclick="generateNewInbox()">
                <span>➕</span><span>Generate</span>
            </button>
            <button class="btn" onclick="refreshInbox()">
                <span>🔄</span><span>Refresh</span>
            </button>
            <button class="btn" onclick="copyAddress()">
                <span>📋</span><span>Copy</span>
            </button>
            <button class="btn btn-danger" onclick="deleteInbox()">
                <span>🗑️</span><span>Delete</span>
            </button>
        </div>

        <div class="panel-container">
            <!-- Incoming Message List -->
            <div class="panel">
                <div class="panel-title">Incoming Messages</div>
                <div class="inbox-list" id="inbox-list-target">
                    <div class="empty-state">
                        <span>📥</span>
                        <p>No messages available yet.</p>
                    </div>
                </div>
            </div>

            <!-- Mail Viewer Target Frame -->
            <div class="panel">
                <div class="panel-title">Message Preview</div>
                <div class="mail-viewer" id="mail-viewer-target">
                    <div class="empty-state">
                        <span>👀</span>
                        <p>Select an email to read its contents.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Toast UI System -->
    <div id="toast">Copied to clipboard!</div>

    <div class="banner-ad-container">
        <span style="font-size: 0.75rem; color: var(--text-secondary); letter-spacing: 0.1em;">💯 SPONSORED BANNER AD DISPLAY 💯</span>
    </div>

    <!-- Scripting Area -->
    <script>
        <?php 
            $api_key = "sk_1eCC94Ur3b1YNAiF_R5pexAN6IGc2puktFRTu65hAFMIW4vgAAQGd5VN0deWt9KtKd0Fph8VEox5LFOjV"; 
        ?>
        const API_KEY = "<?php echo $api_key; ?>";
        const BASE_URL = "https://api.mail.tm";

        let currentAccount = JSON.parse(localStorage.getItem('tmp_account')) || null;
        let mailCache = JSON.parse(localStorage.getItem('tmp_mails')) || [];

        window.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                const splash = document.getElementById('splash');
                if(splash) {
                    splash.style.opacity = '0';
                    splash.style.transform = 'scale(1.02)';
                    setTimeout(() => splash.remove(), 500);
                }
            }, 1200);

            if (currentAccount) {
                renderAddress();
                renderMailList();
            }
        });

        function showToast(message) {
            const toast = document.getElementById('toast');
            toast.innerText = message;
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 2500);
        }

        function renderAddress() {
            const container = document.getElementById('address-display');
            if (currentAccount && currentAccount.address) {
                container.innerHTML = `Active Inbox: <strong style="color:var(--accent-color);">${currentAccount.address}</strong>`;
            } else {
                container.innerHTML = `<span>No Active Inbox. Click Generate Below 👇</span>`;
            }
        }

        function renderMailList() {
            const container = document.getElementById('inbox-list-target');
            if (mailCache.length === 0) {
                container.innerHTML = `
                    <div class="empty-state">
                        <span>📥</span>
                        <p>No messages inside this box yet.</p>
                    </div>`;
                return;
            }

            container.innerHTML = mailCache.map(mail => {
                const timeStr = new Date(mail.createdAt).toLocaleTimeString([], {hour: '2-digit', minute:'2-digit'});
                return `
                    <div class="mail-item" id="mail-${mail.id}" onclick="fetchAndDisplayMailBody('${mail.id}')">
                        <div class="mail-meta">
                            <span class="mail-from">${escapeHtml(mail.from.name || mail.from.address)}</span>
                            <span>${timeStr}</span>
                        </div>
                        <div class="mail-subject">${escapeHtml(mail.subject || 'No Subject')}</div>
                    </div>
                `;
            }).join('');
        }

        async function generateNewInbox() {
            try {
                showToast("Generating custom inbox...");
                const domainResponse = await fetch(`${BASE_URL}/domains`);
                const domainData = await domainResponse.json();
                if(!domainData['hydra:member'] || domainData['hydra:member'].length === 0) {
                    throw new Error("No active domains found.");
                }
                const domain = domainData['hydra:member'][0].domain;
                const uniqueUser = `pro_${Math.random().toString(36).substring(2, 11)}`;
                const generatedEmail = `${uniqueUser}@${domain}`;
                const securePassword = Math.random().toString(36).substring(2, 18);

                const accountRes = await fetch(`${BASE_URL}/accounts`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ address: generatedEmail, password: securePassword })
                });
                
                if (!accountRes.ok) throw new Error("Account generation failure.");

                const tokenRes = await fetch(`${BASE_URL}/token`, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ address: generatedEmail, password: securePassword })
                });

                const tokenData = await tokenRes.json();

                currentAccount = { address: generatedEmail, token: tokenData.token, id: tokenData.id };
                localStorage.setItem('tmp_account', JSON.stringify(currentAccount));
                mailCache = [];
                localStorage.setItem('tmp_mails', JSON.stringify(mailCache));

                renderAddress();
                renderMailList();
                showToast("Inbox Created Successfully!");
                refreshInbox();
            } catch (error) {
                console.error(error);
                showToast("Error generating inbox.");
            }
        }

        async function refreshInbox() {
            if (!currentAccount) {
                showToast("Please generate an inbox first.");
                return;
            }
            try {
                showToast("Syncing incoming emails...");
                const res = await fetch(`${BASE_URL}/messages`, {
                    headers: { 'Authorization': `Bearer ${currentAccount.token}` }
                });
                if (!res.ok) throw new Error("Failed to fetch messages.");
                
                const data = await res.json();
                mailCache = data['hydra:member'] || [];
                localStorage.setItem('tmp_mails', JSON.stringify(mailCache));
                renderMailList();
                showToast("Inbox Updated!");
            } catch (error) {
                console.error(error);
                showToast("Failed to refresh mail stream.");
            }
        }

        async function fetchAndDisplayMailBody(mailId) {
            if (!currentAccount) return;
            const viewer = document.getElementById('mail-viewer-target');
            
            document.querySelectorAll('.mail-item').forEach(item => item.classList.remove('active'));
            const activeItem = document.getElementById(`mail-${mailId}`);
            if (activeItem) activeItem.classList.add('active');

            try {
                viewer.innerHTML = `<div class="empty-state"><span>⏳</span><p>Loading complete email asset...</p></div>`;
                
                const res = await fetch(`${BASE_URL}/messages/${mailId}`, {
                    headers: { 'Authorization': `Bearer ${currentAccount.token}` }
                });
                
                if (!res.ok) throw new Error("Could not fetch mail details.");
                const mailDetails = await res.json();

                const emailContent = mailDetails.html && mailDetails.html.length > 0 ? mailDetails.html : `<div style="font-family:sans-serif; padding:20px; color:#333; white-space:pre-wrap;">${escapeHtml(mailDetails.text || '')}</div>`;
                
                viewer.innerHTML = `<iframe id="email-frame" style="width:100%; height:100%; border:none; background:#ffffff;"></iframe>`;
                const iframe = document.getElementById('email-frame');
                const doc = iframe.contentDocument || iframe.contentWindow.document;
                doc.open();
                doc.write(emailContent);
                doc.close();
            } catch (error) {
                console.error(error);
                viewer.innerHTML = `<div class="empty-state" style="color:var(--danger-color);"><span>❌</span><p>Failed to compile target email asset body container.</p></div>`;
                showToast("Error loading email body content.");
            }
        }

        function copyAddress() {
            if (!currentAccount) { showToast("No active inbox address!"); return; }
            navigator.clipboard.writeText(currentAccount.address);
            showToast("Address Copied!");
        }

        function deleteInbox() {
            if (!currentAccount) return;
            if (confirm("Are you sure you want to drop the current session?")) {
                localStorage.removeItem('tmp_account');
                localStorage.removeItem('tmp_mails');
                currentAccount = null;
                mailCache = [];
                renderAddress();
                renderMailList();
                document.getElementById('mail-viewer-target').innerHTML = `<div class="empty-state"><span>👀</span><p>Select an email to read its contents.</p></div>`;
                showToast("Session Purged.");
            }
        }

        function escapeHtml(text) {
            const div = document.createElement('div');
            div.innerText = text;
            return div.innerHTML;
        }
    </script>
</body>
</html>
