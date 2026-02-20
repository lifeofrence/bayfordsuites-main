function showBookingAlert(name, roomType) {
    if (!document.getElementById('bookingAlertOverlay')) {
        const overlay = document.createElement('div');
        overlay.id = 'bookingAlertOverlay';
        overlay.style.cssText = `
            position: fixed; top: 0; left: 0; width: 100%; height: 100vh;
            background: rgba(0,0,0,0.6); display: flex; justify-content: center; align-items: center;
            z-index: 9999; opacity: 0; transition: opacity 0.3s ease; backdrop-filter: blur(5px);
        `;

        const modal = document.createElement('div');
        modal.style.cssText = `
            background: white; padding: 40px; border-radius: 20px; text-align: center;
            max-width: 450px; width: 90%; transform: translateY(20px); transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2); font-family: 'Montserrat', sans-serif;
        `;

        modal.innerHTML = `
            <div style="width: 70px; height: 70px; background: rgba(37, 211, 102, 0.1); border-radius: 50%; display: flex; justify-content: center; align-items: center; margin: 0 auto 20px; color: #25d366; font-size: 2rem;">
                <i class="fas fa-check"></i>
            </div>
            <h2 style="font-family: 'Playfair Display', serif; color: #000703; font-size: 1.8rem; margin-bottom: 15px;">Reservation Received</h2>
            <p style="color: #6c757d; font-size: 1rem; line-height: 1.6; margin-bottom: 25px;" id="bookingAlertMessage"></p>
            <button onclick="closeBookingAlert()" style="background: linear-gradient(135deg, #c19a6b, #d4af37); color: white; border: none; padding: 12px 30px; border-radius: 50px; font-weight: 600; text-transform: uppercase; cursor: pointer; transition: all 0.3s; font-size: 0.9rem; letter-spacing: 1px;">Dismiss</button>
        `;

        overlay.appendChild(modal);
        document.body.appendChild(overlay);

        window.closeBookingAlert = () => {
            overlay.style.opacity = '0';
            modal.style.transform = 'translateY(20px)';
            setTimeout(() => overlay.remove(), 300);
        };
    }

    const message = `Thank you <strong>${name}</strong>! Your booking request for the <strong>${roomType}</strong> has been received. Our team will contact you shortly to confirm your reservation.`;
    document.getElementById('bookingAlertMessage').innerHTML = message;
    
    const overlay = document.getElementById('bookingAlertOverlay');
    const modal = overlay.querySelector('div');
    
    setTimeout(() => {
        overlay.style.opacity = '1';
        modal.style.transform = 'translateY(0)';
    }, 10);
}
