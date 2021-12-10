import { Component, OnInit } from "@angular/core";
import { Router } from "@angular/router";
import { AuthService } from "src/app/core/auth.service";

@Component({
    selector: 'app-login',
    templateUrl: './login.component.html',
    styleUrls: ['./login.component.scss']
})

export class LoginComponent implements OnInit {
    role = '';
    email = '';
    password = '';

    constructor(
        private authService: AuthService,
        private router: Router
    ) {}

    ngOnInit(): void {
    }
    
    setProfile = (user: string) => {
        if (user === 'transfer') {
            this.role = user;
        }
    }

    login (email: string, password: string, role: string) {
        this.authService.authenticate('transportador1@example.org', '12345')
            .subscribe(
                () => {
                    if (role === 'transfer') {
                        this.router.navigate(['lista-cotacao']);
                    } else {
                        this.router.navigate(['lista-ofertas']);
                    }
                },
                err => {
                    console.log(err);
                });
    }
}