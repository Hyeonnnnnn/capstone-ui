/**
 * Debug utility for the clerk management system - Updated version
 * Used to track element access and troubleshoot issues
 */

// Enhanced debug message to appear more visibly in console
const logError = (message) => {
    console.error('%c' + message, 'background: #ff0000; color: white; padding: 2px 5px; border-radius: 2px;');
};

const logSuccess = (message) => {
    console.log('%c' + message, 'background: #4CAF50; color: white; padding: 2px 5px; border-radius: 2px;');
};

const debugElement = (elementId, operation) => {
    const element = document.getElementById(elementId);
    if (!element) {
        logError(`${operation} failed: Element with ID '${elementId}' not found.`);
        return null;
    }
    logSuccess(`${operation} success: Found element with ID '${elementId}'`);
    return element;
};

/**
 * Directly test if a modal can be created and shown
 */
function testModal(modalId) {
    try {
        const modalElement = document.getElementById(modalId);
        
        if (!modalElement) {
            logError(`Modal test failed: Element with ID '${modalId}' not found.`);
            return false;
        }
        
        logSuccess(`Found modal element with ID: ${modalId}`);
        
        // Test if Bootstrap is available
        if (typeof bootstrap === 'undefined') {
            logError('Bootstrap JavaScript is not available. Make sure bootstrap.bundle.min.js is loaded.');
            return false;
        }
        
        // Try to create a Bootstrap modal instance
        try {
            const modal = new bootstrap.Modal(modalElement);
            logSuccess('Successfully created Bootstrap Modal instance.');
            
            // Try to show the modal
            modal.show();
            logSuccess('Successfully showed Bootstrap Modal.');
            
            return true;
        } catch (bsError) {
            logError(`Bootstrap Modal error: ${bsError.message}`);
            return false;
        }
    } catch (error) {
        logError(`Unexpected error testing modal: ${error.message}`);
        return false;
    }
}

/**
 * Use this function to inspect the clerk details modal elements
 */
function inspectModalElements() {
    const elementsToCheck = [
        'clerkId',
        'firstName',
        'middleName',
        'lastName',
        'email',
        'password',
        'hireDate',
        'modalClerkName',
        'modalClerkImage',
        'modalClerkStatus',
        'accountStatusBadge',
        'clerkDetailsModal'
    ];
    
    console.group('Modal Elements Inspection');
    elementsToCheck.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
            logSuccess(`Element '${id}': Found ✓`);
            
            const tagName = element.tagName.toLowerCase();
            const type = element.type || 'N/A';
            console.log(`  - Type: ${tagName}${type !== 'N/A' ? ` (${type})` : ''}`);
            
            if (tagName === 'input') {
                console.log(`  - Value: "${element.value}"`);
            } else {
                console.log(`  - Inner HTML: "${element.innerHTML.substring(0, 50)}${element.innerHTML.length > 50 ? '...' : ''}"`);
            }
        } else {
            logError(`Element '${id}': Not found ✗`);
        }
    });
    console.groupEnd();
}
