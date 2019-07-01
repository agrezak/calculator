import 'styles/index.scss';

import { qs, postData } from './scripts/helpers';

const button = qs('.JS-request');
const url = 'http://localhost:8000/calculations';

button.addEventListener('click', () => {
    const testData = {
        name: 'john',
        age: 100,
        ip: '1.0.0'
    }
    postData(url, testData);
});







   
