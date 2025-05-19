// Modal Emergency Fix Script
// This script can be used to fix modal display issues via console
// To use it, open your browser console and type: fixClerkDetailsModal()

function fixClerkDetailsModal() {
    console.log("🛠️ Running emergency modal fix...");
    
    // Find modal element
    const modalElement = document.getElementById('clerkDetailsModal');
    if (!modalElement) {
        console.error("❌ Modal element not found! Check that the ID is correct.");
        return;
    }
    
    console.log("✅ Modal element found.");
    
    // Multiple methods to show modal
    
    console.log("🔍 Trying multiple approaches to show modal...");
    
    // Method 1: Try creating a new Bootstrap Modal instance
    try {
        console.log("Attempt 1: Creating new Bootstrap Modal");
        new bootstrap.Modal(modalElement).show();
        console.log("✅ Success with new Bootstrap Modal!");
        return;
    } catch (e) {
        console.error("❌ Method 1 failed:", e);
    }
    
    // Method 2: Try using jQuery
    try {
        console.log("Attempt 2: Using jQuery");
        if (typeof jQuery !== 'undefined') {
            jQuery(modalElement).modal('show');
            console.log("✅ Success with jQuery modal!");
            return;
        } else {
            console.warn("⚠️ jQuery not available, skipping this method");
        }
    } catch (e) {
        console.error("❌ Method 2 failed:", e);
    }
    
    // Method 3: Manual DOM manipulation
    try {
        console.log("Attempt 3: Manual DOM manipulation");
        
        // Remove existing backdrop if any
        document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());
        
        // Reset modal state
        modalElement.classList.remove('show');
        document.body.classList.remove('modal-open');
        document.body.style.overflow = '';
        document.body.style.paddingRight = '';
        
        // Now show it manually
        setTimeout(() => {
            // Add modal classes
            modalElement.style.display = 'block';
            modalElement.classList.add('show');
            document.body.classList.add('modal-open');
            
            // Add backdrop
            const backdrop = document.createElement('div');
            backdrop.className = 'modal-backdrop fade show';
            document.body.appendChild(backdrop);
            
            console.log("✅ Manual display method applied!");
        }, 100);
        
        return;
    } catch (e) {
        console.error("❌ Method 3 failed:", e);
    }
    
    console.error("❌ All methods failed to show the modal!");
    console.log("👉 Please try refreshing the page or check for JavaScript errors.");
}
