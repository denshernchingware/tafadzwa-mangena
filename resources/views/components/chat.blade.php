  <section>
        <button id="fab" aria-label="Open chat">
            <svg class="ico-chat" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
            </svg>
            <svg class="ico-close" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5"
                stroke-linecap="round">
                <line x1="18" y1="6" x2="6" y2="18" />
                <line x1="6" y1="6" x2="18" y2="18" />
            </svg>
        </button>

        <!-- Chat Window -->
        <div id="chat-window" role="dialog" aria-label="MightyBreeze Assistant">
            <div class="chat-header " >
                <div class="chat-avatar">
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 2a10 10 0 100 20A10 10 0 0012 2z" />
                        <path d="M8 14s1.5 2 4 2 4-2 4-2" />
                        <line x1="9" y1="9" x2="9.01" y2="9" />
                        <line x1="15" y1="9" x2="15.01" y2="9" />
                    </svg>
                </div>
                <div class="chat-header-info">
                    <div class="chat-header-name">Tafadzwa Mangena</div>
                    <div class="chat-header-status">
                        <span class="status-dot"></span> Online · Data Analyst
                    </div>
                </div>
            </div>

            <div class="chat-messages" id="messages"></div>

            <div class="chat-input-bar">
                <textarea id="user-input" rows="1" placeholder="Type your message…"></textarea>
                <button id="send-btn" aria-label="Send message" disabled>
                    <svg viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.2"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="22" y1="2" x2="11" y2="13" />
                        <polygon points="22 2 15 22 11 13 2 9 22 2" />
                    </svg>
                </button>
            </div>
            <div class="powered-by"> Tafadzwa Mangena © 2026</div>
        </div>
    </section>
