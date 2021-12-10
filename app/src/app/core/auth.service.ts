import { HttpClient, HttpHeaders } from '@angular/common/http';
import { environment } from '../../environments/environment';
import { Injectable } from '@angular/core';

const API_URL = environment['API_URL'];

@Injectable({
  providedIn: 'root'
})
export class AuthService {

  constructor(private http: HttpClient) { }

  authenticate(email: string, password: string) {
    const credentials = {
      email,
      password
    };
    
    return this.http.post(API_URL + '/api/login', JSON.stringify(credentials));
  }
}
