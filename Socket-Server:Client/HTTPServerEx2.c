// Server side C program to demonstrate HTTP Server programming
#include <stdio.h>
#include <sys/socket.h>
#include <unistd.h>
#include <stdlib.h>
#include <netinet/in.h>
#include <string.h>

#define PORT 8080
int main(int argc, char const *argv[])
{
    int server_fd, new_socket; long valread;
    struct sockaddr_in address;
    int addrlen = sizeof(address);
    char buffer[30000] = {0};
    char data[2048] = {0};
    
    if ((server_fd = socket(AF_INET, SOCK_STREAM, 0)) == 0){
        perror("In socket");
        exit(EXIT_FAILURE);
    }
    
    address.sin_family = AF_INET;
    address.sin_addr.s_addr = INADDR_ANY;
    address.sin_port = htons( PORT );
    
    if (bind(server_fd, (struct sockaddr *)&address, sizeof(address))<0){
        perror("In bind");
        exit(EXIT_FAILURE);
    }
    if (listen(server_fd, 10) < 0){
        perror("In listen");
        exit(EXIT_FAILURE);
    }

   
    while(1)
    {
        printf("\n+++++++ Waiting for new connection ++++++++\n\n");

        if ( (new_socket = accept(server_fd, (struct sockaddr *)&address,  (socklen_t*)&addrlen)) < 0 ){
            perror("In accept");
            exit(EXIT_FAILURE);
        }

        valread = read( new_socket , buffer, 30000);
        printf("%s\n",buffer );
        
        char html[] = "<html><head><title>Temperature</title></head><body>{\"humidity\":81%,\"airtemperature\":23.5C}</p></body></html>\r\n";
        char headers[] = "HTTP/1.0 200 OK\r\n Server: CPi\r\n Content-type: text/html\r\n\r\n";
        


        snprintf(data, sizeof data, "%s %s", headers, html);
        int n = write(new_socket, data, strlen(data));

        printf("------------------Hello message sent-------------------");
        close(new_socket);
    }
    return 0;
}
