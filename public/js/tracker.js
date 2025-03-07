// Just need to be included globally in a system
async function trackVisit() {
    const data = {
        url: window.location.href,
        referrer: document.referrer,
        userAgent: navigator.userAgent,
        screenSize: `${window.screen.width}x${window.screen.height}`,
        language: navigator.language,
        timestamp: new Date().toISOString()
    };

    await fetch('traffic-track?method=save', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(data)
    });
}

trackVisit();
