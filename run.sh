#!/bin/bash
echo "Hello Chia!" 

cd /root/chia-blockchain

. ./activate

chia peer -c full_node
