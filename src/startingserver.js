import { exec } from 'child_process';
import nw from 'nw';

// Function to start Laravel server
function startLaravelServer() {
    const server = exec('php -S localhost:80 -t dev/public', { cwd: '../' });

    server.stdout.on('data', (data) => {
        console.log(`stdout: ${data}`);
    });

    server.stderr.on('data', (data) => {
        console.error(`stderr: ${data}`);
    });

    server.on('close', (code) => {
        console.log(`Laravel server exited with code ${code}`);
    });

    return server;
}

// Start the Laravel server
const serverProcess = startLaravelServer();

// Launch NW.js window after a delay to ensure server starts
setTimeout(() => {
    nw.Window.open('http://localhost:80/dev/public', {}, (win) => {
        console.log('NW.js window opened');
    });
}, 5000);
