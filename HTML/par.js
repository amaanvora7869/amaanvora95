function showParking(area) {
    const parkingArea = document.getElementById('parking-area');
    parkingArea.style.visibility = 'visible';

    // Clear any existing slots
    parkingArea.innerHTML = '';

    // Add parking slots based on the selected area
    let parkingSlots;
    switch(area) {
        case 'canteen':
            parkingSlots = 8; // Example: 8 slots near the canteen
            break;
        case 'stairs':
            parkingSlots = 6; // Example: 6 slots near the stairs
            break;
        case 'sports':
            parkingSlots = 10; // Example: 10 slots near the sports area
            break;
        case 'lab':
            parkingSlots = 12; // Example: 12 slots near the lab
            break;
    }

    for (let i = 1; i <= parkingSlots; i++) {
        const slot = document.createElement('div');
        slot.className = 'slot empty'; // Assign 'empty' or 'occupied' class based on availability
        slot.textContent = Slot ${i};

        // Optionally, you can add a click event to mark a slot as occupied
        slot.addEventListener('click', () => {
            if (slot.classList.contains('empty')) {
                slot.classList.remove('empty');
                slot.classList.add('occupied');
                slot.textContent = Slot ${i} (Occupied);
            } else {
                slot.classList.remove('occupied');
                slot.classList.add('empty');
                slot.textContent = Slot ${i};
            }
        });

        parkingArea.appendChild(slot);
    }
}