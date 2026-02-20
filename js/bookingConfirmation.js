function confirmBooking() {
    // Validate form first
    const form = document.getElementById('bookingForm');
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const checkin = document.getElementById('checkin').value;
    const checkout = document.getElementById('checkout').value;
    const roomSelect = document.getElementById('roomType');
    const roomType = roomSelect.options[roomSelect.selectedIndex].text;
    const pricePerNight = parseInt(document.getElementById('pricePerNight').value);
    const nofroom = parseInt(document.getElementById('nofroom').value);

    // Filter out prices text from roomType label
    const cleanRoomType = roomType.split(' - ')[0];

    // Calculate nights
    const date1 = new Date(checkin);
    const date2 = new Date(checkout);
    const timeDiff = date2.getTime() - date1.getTime();
    
    if (timeDiff <= 0 || isNaN(timeDiff)) {
        alert("Please select a valid check-out date after the check-in date.");
        return;
    }
    
    const nights = Math.ceil(timeDiff / (1000 * 3600 * 24));
    const totalAmount = nights * pricePerNight * nofroom;

    if (!document.getElementById('bookingConfirmOverlay')) {
        const overlay = document.createElement('div');
        overlay.id = 'bookingConfirmOverlay';
        overlay.style.cssText = `
            position: fixed; top: 0; left: 0; width: 100%; height: 100vh;
            background: rgba(0,0,0,0.6); display: flex; justify-content: center; align-items: center;
            z-index: 9999; opacity: 0; transition: opacity 0.3s ease; backdrop-filter: blur(5px);
        `;

        const modal = document.createElement('div');
        modal.id = 'bookingConfirmModal';
        modal.style.cssText = `
            background: white; padding: 40px; border-radius: 20px; text-align: left;
            max-width: 500px; width: 90%; transform: translateY(20px); transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            box-shadow: 0 15px 35px rgba(0,0,0,0.2); font-family: 'Montserrat', sans-serif;
        `;

        overlay.appendChild(modal);
        document.body.appendChild(overlay);

        window.closeConfirmModal = () => {
            overlay.style.opacity = '0';
            modal.style.transform = 'translateY(20px)';
            setTimeout(() => overlay.style.display = 'none', 300);
        };
        
        window.submitConfirmedBooking = () => {
            form.submit();
        };
    }

    const overlay = document.getElementById('bookingConfirmOverlay');
    const modal = document.getElementById('bookingConfirmModal');
    
    modal.innerHTML = `
        <h2 style="font-family: 'Playfair Display', serif; color: #000703; font-size: 1.8rem; margin-bottom: 25px; text-align: center; border-bottom: 1px solid #eee; padding-bottom: 15px;">Confirm Your Reservation</h2>
        
        <div style="margin-bottom: 25px; color: #1c1c1c;">
            <p style="margin-bottom: 10px;"><strong>Name:</strong> ${name}</p>
            <p style="margin-bottom: 10px;"><strong>Email:</strong> ${email}</p>
            <p style="margin-bottom: 10px;"><strong>Phone:</strong> ${phone}</p>
            <p style="margin-bottom: 10px;"><strong>Room:</strong> ${cleanRoomType}</p>
            <p style="margin-bottom: 10px;"><strong>Check-in:</strong> ${checkin}</p>
            <p style="margin-bottom: 10px;"><strong>Check-out:</strong> ${checkout}</p>
            <p style="margin-bottom: 10px;"><strong>Duration:</strong> ${nights} night(s)</p>
            <p style="margin-bottom: 10px;"><strong>Number of Rooms:</strong> ${nofroom}</p>
            <p style="margin-bottom: 10px; font-size: 1.2rem; color: #d4af37; margin-top: 15px; border-top: 1px solid #eee; padding-top: 15px;"><strong>Total Amount:</strong> ₦${totalAmount.toLocaleString()}</p>
        </div>
        
        <div style="display: flex; gap: 15px; justify-content: center;">
            <button type="button" onclick="closeConfirmModal()" style="background: transparent; border: 2px solid #c19a6b; color: #c19a6b; padding: 12px 25px; border-radius: 50px; font-weight: 600; text-transform: uppercase; cursor: pointer; transition: all 0.3s; flex: 1;">Cancel</button>
            <button type="button" onclick="submitConfirmedBooking()" style="background: linear-gradient(135deg, #c19a6b, #d4af37); color: white; border: none; padding: 12px 25px; border-radius: 50px; font-weight: 600; text-transform: uppercase; cursor: pointer; transition: all 0.3s; flex: 1; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">Confirm & Book</button>
        </div>
    `;

    overlay.style.display = 'flex';
    setTimeout(() => {
        overlay.style.opacity = '1';
        modal.style.transform = 'translateY(0)';
    }, 10);
}
